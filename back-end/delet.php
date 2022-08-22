<?php
require("db.php");
try {
    
    $dd= $db->prepare("DELETE FROM `produit` WHERE id=$_GET[id]") ;
    $dd->execute(); 

    header('location:../front-end/affichage.php');
} catch (PDOException $th) {
    echo $th->getMessage();
}


?>
