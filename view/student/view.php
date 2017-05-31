<?php
require_once('../view/template/header.php');
?>
    <div class="panel panel-default">
        <div class="panel-heading">Просмотр студента</div>
        <div class="panel-body">
            <p>
                <strong>Имя: </strong><?= $student->firstName ?>
            </p>
            <p>
                <strong>Фамилия: </strong><?= $student->lastName ?>
            </p>
            <p>
                <strong>Класс: </strong><?= $student->class ?>
            </p>
        </div>
    </div>
<?php
require_once('../view/template/footer.php');
?>