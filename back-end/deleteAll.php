

<?php
require("db.php");
try {
    
    $dd= $db->prepare("TRUNCATE TABLE produit") ;
    $dd->execute(); 

    header('location:../front-end/affichage.php');
} catch (PDOException $th) {
    echo $th->getMessage();
}


?>