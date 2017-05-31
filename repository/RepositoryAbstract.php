<?php

/**
 * Created by PhpStorm.
 * User: artem
 * Date: 20.05.17
 * Time: 23:51
 */
abstract class RepositoryAbstract
{
    protected $pdo;
    protected $entityName;

    public function __construct()
    {
        $config = (require_once('../config/config.php'))['db'];
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $this->pdo = new PDO($dsn, $config['login'], $config['pass'], $opt);
        } catch (PDOException $e) {
            die('Подключение не удалось: ' . $e->getMessage());
        }
    }

    public abstract function findById($id);
}
