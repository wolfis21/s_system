<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=remotemysql.com;dbname=ookqSHbDR6;charset=utf8', 'ookqSHbDR6', 'veKyTN02si');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}