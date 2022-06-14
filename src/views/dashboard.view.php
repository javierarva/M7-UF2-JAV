<?php require('partials/head.php');?>

<main>
    <h2>Dashboard</h2>
    <br>
    <div>
        <h3>Has iniciado sesión correctamente.</h3>
        <p>Bienvenido, <?= $_SESSION['username']??'User';?></p>
    </div>

    <br>

    <h3>Todas tus listas:</h3>
    <ul>
        <?php foreach($lists as $list) { ?>
            <li><?= $list; ?></li>
        <?php } ?>
    </ul>

    <h3>Todas las tareas:</h3>
    <ul>
        <?php foreach($tasks as $task) { ?>
            <li><?= $task; ?></li>
        <?php } ?>
    </ul>

    <h3>Crear una lista</h3>
    <form action="/dashboard/listsCreate" method="post">
        <input type="text" name="listName" placeholder="Nombre de la lista"><br>
        <button type="submit">Crear lista</button>
    </form>

    <h3>Crear una tarea</h3>
    <form action="/dashboard/tasksCreate" method="post">
        <input type="text" name="taskName" placeholder="Nombre de la tarea"><br>
        <input type="text" name="chosenList" placeholder="Nombre de la lista"><br>
        <button type="submit">Crear tarea</button>
    </form>

</main>

<?php require('partials/footer.php');?>