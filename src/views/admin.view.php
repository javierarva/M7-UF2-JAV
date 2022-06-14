<?php require('partials/head.php');?>

<h2>Panel de Admin</h2>
<br>
<h2>Usuarios</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Actualizar</th>
        <th>Borrar</th>
    </tr>
    <?php foreach($users as $user) { ?>
        <tr>
            <td><?= $user->userId; ?></td>
            <td><?= $user->username; ?></td>
            <td><?= $user->email; ?></td>
            <td><?= $user->role; ?></td>
            <td><a href="" id="<?= $user->userId; ?>">ACTUALIZAR</a></td>
            <td><a href="" id="<?= $user->userId; ?>">BORRAR</a></td>
        </tr>
    <?php } ?>

</table>
<br>
<h2>Materias</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Actualizar</th>
        <th>Borrar</th>
    </tr>
    <?php foreach($subjects as $subject) { ?>
        <tr>
            <td><?= $subject->subjectId; ?></td>
            <td><?= $subject->name; ?></td>
            <td><a href="" id="<?= $subject->subjectId; ?>">ACTUALIZAR</a></td>
            <td><a href="" id="<?= $subject->subjectId; ?>">BORRAR</a></td>
        </tr>
    <?php } ?>

</table>

<?php require('partials/footer.php');?>