<?php
require_once('../view/template/header.php');
?>
    <div class="panel panel-default">
        <div class="panel-heading">Просмотр родителя</div>
        <div class="panel-body">
            <p>
                <strong>Имя: </strong><?= $family->firstName ?>
            </p>
            <p>
                <strong>Фамилия: </strong><?= $family->lastName ?>
            </p>
            <p>
                <strong>Адрес: </strong><?= $family->address ?>
            </p>
        </div>
    </div>
<?php
require_once('../view/template/footer.php');
?>