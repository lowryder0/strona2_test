<?php
    $host ='127.0.0.1';
    $db = 'strona2_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try
    {
        $pdo = new PDO($dsn, $user, $pass);
        //echo 'Hello database';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) 
    {
        //echo "<h1 class='text-danger'>no database found</h1>";
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);


?>