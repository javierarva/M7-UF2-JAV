<?php require('partials/head.php');?>

<main>
    <h2>Dashboard</h2>
    <br>
    <div>
        <h3>Has iniciado sesión correctamente</h3>
        <p>Bienvenido, <?= $_SESSION['uname']??'User';?></p>
    </div>

    <br>

    <h3>Apuntar una tarea</h3>
    <form action="/pages/tasks" method="post">
        <input name="task" type="text" placeholder="Tarea"><br>
        <input name="listname1" type="text" placeholder="Nombre de la lista"><br>
        <button type="submit">Apuntar</button>
    </form>

    <h3>Crear una lista</h3>
    <form action="/pages/lists" method="post">
        <input name="listname2" type="text" placeholder="Nombre de la lista"><br>
        <button type="submit">Crear</button>
    </form>

    <button><a href="/logout/logo">CERRAR SESIÓN</a></button>
</main>

<?php require('partials/footer.php');?>