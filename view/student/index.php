<?php
require_once('../view/template/header.php');
?>

    <a href="index.php?action=create-student" class="btn btn-info">Новый ученик</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Класс</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?= $student->firstName ?></td>
                <td><?= $student->lastName ?></td>
                <td><?= $student->class ?></td>
                <td>
                    <a href="index.php?action=view-student&id=<?= $student->id ?>" class="btn btn-primary">
                        <i class="glyphicon glyphicon-eye-open"></i>
                    </a>
                    <a href="index.php?action=update-student&id=<?= $student->id ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <a href="index.php?action=delete-student&id=<?= $student->id ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php
require_once('../view/template/footer.php');
?>