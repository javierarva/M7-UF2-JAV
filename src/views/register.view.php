<?php require('partials/head.php');?>

<main>
    <h2>Register</h2>
    <form action="/register/regi" method="post">
        <input name="email" type="email" placeholder="Email"><br>
        <input name="uname" type="text" placeholder="Username"><br>
        <input name="passwd" type="password" placeholder="Password"><br>
        <input name="course" type="course" placeholder="Course"><br>
        <select name="role">
            <option>Alumno</option>
            <option>Profesor</option>
        </select>
        <button type="submit">Register</button>
    </form>
</main>

<?php require('partials/footer.php');?>