<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'web';

$dsn = "mysql:host=$host;dbname=$db_name";

try
{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch (PDOException $e)
{
    die($e->getMessage());
}
