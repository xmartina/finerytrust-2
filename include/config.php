<?php

define("WEB_TITLE","Finery Trust PLC"); // Change Bank Name
define("WEB_URL","https://finerytrust.com/new-tpl"); // Change No "/" Ending splash
define("WEB_EMAIL","info@finerytrust.com"); // Change Your Website Email

$web_url = WEB_URL;

function dbConnect(){
    $servername = "localhost";
    $username = "norwegia_finerytrust-2";//DATABASE USERNAME
    $password = "+C@ppy126";//DATABASE PASSWORD
    $database = "norwegia_finerytrust-2";//DATABASE NAME
    $dns = "mysql:host=$servername;dbname=$database";

    try {
        $conn = new PDO($dns, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
//return dbConnect();

function inputValidation($value): string
{
    return trim(htmlspecialchars(htmlentities($value)));
}