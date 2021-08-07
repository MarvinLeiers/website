<?php

$target_page = 'home';

if (isset($_GET['p']))
    $target_page = rtrim(htmlspecialchars($_GET['p']), '/');

$filename = '../pages/' . $target_page . '.html';

if (file_exists($filename))
    include($filename);
else
    echo "Page not found!";
