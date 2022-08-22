<?php

try {

    $host="mysql:host=localhost;charset=utf8";
    $db_user="root";
    $db_pass="";


    //  CREATE DATABASE gestion_produit

    // $dB=new pdo("$host" ,"$db_user","$db_pass");
    // $sqlDB='CREATE DATABASE gestion_produit';
    // $dB->exec($sqlDB);



/*
    //  create table produit

    $db=new PDO("mysql:host=localhost;charset=utf8;dbname=gestion_produit","root","");
    $sqlTB="CREATE TABLE produit (
        id int AUTO_INCREMENT PRIMARY KEY ,
        title varchar(255),
        price int,
        taxes int,
        ads int,
        discount int,
        category varchar(255))";
    $db->exec($sqlTB);


*/
    
    echo "dakshi nadii";

} catch (PDOException $ex) {
    die('Catch Error create   '.$ex->getMessage());
}


?>