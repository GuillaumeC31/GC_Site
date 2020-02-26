<?php

$db_host = 'localhost';
$db_name = 'guillaumecouget';
$db_user = 'root';
$db_pass = ''; // mot de passe

$bdd = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8mb4', $db_user, $db_pass);
