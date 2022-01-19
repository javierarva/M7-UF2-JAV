<?php

namespace App;

class UserController {

    public function login() {     
        $form=$this->createForm();
        $form->open(BASE.'user/log')
            ->label('Email:')
            ->input('email','email')
            ->label('Password:')
            ->input('password','passwd')
            ->csrf($this->session->get('csrf-token'))
            ->submit('Sign')
            ->close();

        $this->render([
            'form'=>$form],'login');
    }

    public function log() {
        if (isset($_POST['email'])&&!empty($_POST['email'])
        &&isset($_POST['passwd'])&&!empty($_POST['passwd']))
        {
            $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
            $pass=filter_input(INPUT_POST,'passwd',FILTER_SANITIZE_STRING);
        
    
            $user=$this->auth($email,$pass);
            if ($user){
                $this->session->set('user',$user);
                //si usuari valid
                if(isset($_POST['remember-me'])&&($_POST['remember-me']=='on'||$_POST['remember-me']=='1' )&& !isset($_COOKIE['remember'])){
                    $hour = time()+3600 *24 * 30;
                    $path=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
                    setcookie('uname', $user['uname'], $hour,$path);
                    setcookie('email', $user['email'], $hour,$path);
                    setcookie('active', 1, $hour,$path);          
                }
                header('Location:'.BASE.'user/dashboard');
            }
            else{
                header('Location:'.BASE.'user/login');
            }
        
        }
    }

    function dashboard() {  
        $user=$this->session->get('user');
        $data=$this->getDB()->selectAllWithJoin('tasks','users',['tasks.id','tasks.task','tasks.list'],'user','id');
        $this->render(['user'=>$user,'data'=>$data],'dashboard');
    }
}