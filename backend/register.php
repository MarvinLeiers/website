<?php

if ($_SERVER['REQUEST_METHOD'] != 'GET')
    die('Illegal access.');

require 'functions.php';
$username = htmlspecialchars($_GET['username']);
$email = htmlspecialchars($_GET['email']);
$pw = password_hash(htmlspecialchars($_GET['pw']), PASSWORD_DEFAULT);

register_user($username, $email, $pw);

