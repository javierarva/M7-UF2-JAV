<?php

require('partials/head.php');
$email = filter_input(INPUT_COOKIE, 'remember');

?>

<main>
    <h2>Login</h2>
    <form action="/login/logi" method="post">
        <input name="email" type="email" placeholder="Email"><br>
        <input name="passwd" type="password" placeholder="Password"><br>
        <input name="remember" type="checkbox">Recuérdame<br>
        <button type="submit">Login</button>
    </form>
</main>

<?php require('partials/footer.php');?>