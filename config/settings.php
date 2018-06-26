<?php

if($_SERVER['SERVER_NAME']== 'localhost') {
    define("SQL_HOST", "localhost");
    define("SQL_USER", "root");
    define("SQL_PASS", "root");
    define("SQL_DBNAME", "paceme");
}

else{
    define("SQL_HOST","db740498105.db.1and1.com");
    define("SQL_USER","dbo740498105");
    define("SQL_PASS","Iesa2018!");
    define("SQL_DBNAME","db740498105");
}


try{
    $db = new PDO("mysql:dbname=".SQL_DBNAME.";charset=utf8;host=".SQL_HOST,SQL_USER,SQL_PASS);
}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}

$maxFileSize = 1048576; //=1Mo

include('functions.php');