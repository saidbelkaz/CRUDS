
<?php
require("db.php");
// SEARCH
$stat= $db->prepare(" SELECT * FROM produit WHERE title LIKE '%$_GET[search]%' ");
$stat->execute();

$results= $stat->fetchAll();
?>