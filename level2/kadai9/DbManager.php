<?php

function getDb(): PDO
{
    $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=SCHOOL;charset=utf8mb4';
    $usr = 'root';
    $passwd = 'rootpass';

    $db = new PDO($dsn, $usr, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
}