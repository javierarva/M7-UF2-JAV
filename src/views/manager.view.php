<?php require('partials/head.php');?>

<h2>Panel de Manager</h2>

<h3>Lista de Materias:</h3>
<ul>
    <?php foreach($resultSubject as $subject) { ?>
        <li><?= $subject; ?></li>
    <?php } ?>
</ul>

<?php if($_SESSION['role'] == 'student'): ?>
    <h3>Lista de Profesores:</h3>
    <ul>
        <?php foreach($resultTeacher as $teacher) { ?>
            <li><?= $teacher; ?></li>
        <?php } ?>
    </ul>
<?php elseif($_SESSION['role'] == 'teacher'): ?>
    <h3>Lista de Estudiantes:</h3>
    <ul>
        <?php foreach($resultStudent as $student) { ?>
            <li><?= $student; ?></li>
        <?php } ?>
    </ul>
<?php endif;?>

<h3>Editar tareas</h3>
<form action="manager/tasksEdit" method="post">
    <input type="text" name="taskId" placeholder="ID de la tarea"><br>
    <input type="text" name="taskName" placeholder="Nombre de la tarea"><br>
    <button type="submit">Editar tarea</button>
</form>
<?php require('partials/footer.php');?>