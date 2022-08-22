<?php
try {
    $host="mysql:host=localhost;charset=utf8;dbname=gestion_produit";
    $user_db="root";
    $pass_db="";
    
    $db=new PDO("$host","$user_db","$pass_db");
    
} catch (PDOException $th) {
    echo $th->getMessage();
}
?>