<?php
require_once('../view/template/header.php');
?>

    <a href="index.php?action=create-family" class="btn btn-info">Новый родитель</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Адрес</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($families as $family) { ?>
            <tr>
                <td><?= $family->firstName ?></td>
                <td><?= $family->lastName ?></td>
                <td><?= $family->address ?></td>
                <td>
                    <a href="index.php?action=view-family&id=<?= $family->id ?>" class="btn btn-primary">
                        <i class="glyphicon glyphicon-eye-open"></i>
                    </a>
                    <a href="index.php?action=update-family&id=<?= $family->id ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <a href="index.php?action=delete-family&id=<?= $family->id ?>" class="btn btn-danger">
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