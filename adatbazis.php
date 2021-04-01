<?php

$hostDB = 'localhost';
$adatbazisDB = 'loriprojekt2'; 
$felhasznaloDB = 'root';
$jelszoDB = '';

/* Csinálunk egy dsl - t */
$dsl = "mysql:host=localhost;dbname=loriprojekt2";
    /* Exception kezelése */
    try
    {
        $pdo = new PDO($dsl,$felhasznaloDB,$jelszoDB);
    }
    catch(Exception $ex)
    {
        die('Nem sikerült kapcsolódni! '.$ex->getMessage());
    }

?>
