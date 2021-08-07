<?php

function register_user($username, $email, $pw)
{
    if (does_user_exist($username))
        return false;

    require 'mysql.php';

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?);");
    $stmt->execute([$username, $email, $pw]);

}

function does_user_exist($username)
{
    require 'mysql.php';

    $stmt = $pdo->prepare('SELECT COUNT(*) amount FROM users WHERE username = ?;');
    $stmt->execute([$username]);
    $result = $stmt->fetch();

    return $result['amount'] != '0';
}
