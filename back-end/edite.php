<?php
require("db.php");
try {
    if (isset($_POST['up']))
    {
        $title=$_POST['title'];
        $price=$_POST['price'];
        $taxes=$_POST['taxes'];
        $ads=$_POST['ads'];
        $discount=$_POST['discount'];
        $category=$_POST['category'];
        $quantite=$_POST['quantite'];

    $ddd= $db->prepare("UPDATE `produit` SET `title`='$title',`price`='$price',`taxes`='$taxes',`ads`='$ads',`discount`='$discount',`category`='$category',`quantite`='$quantite'  WHERE id=$_GET[id]");
    $ddd->execute();
    header('location:../front-end/affichage.php') ;
}    

} catch (PDOException $th) {
    echo $th->getMessage();
}

$dd= $db->prepare("SELECT* FROM produit WHERE id=$_GET[id]");
$dd->execute();     
$d =$dd->fetch(PDO::FETCH_OBJ);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../front-end/style.css">
    <title>Document</title>
</head>
<body>

    <div class="crud">
        <div class="head">
            <h1>gestion de produit</h1>
            <h3>Create ,update, delete et search</h3>
        </div>



<form  method="post">
        <div class="inputs">
            <input  placeholder="Title" value="<?= $d->title?>" type="text" name="title" id="title">
            <div class="price">
                <input value="<?= $d->price?>" type="number" name="price" id="price" placeholder="Price">
                <input value="<?= $d->taxes?>" type="number" name="taxes" id="taxes" placeholder="Taxes">
                <input value="<?= $d->ads?>" type="number" name="ads" id="ads" placeholder="Ads">
                <input value="<?= $d->discount?>" type="number" name="discount" id="discount" placeholder="Discount" >
            </div>
            <input placeholder="quantite" type="number"value="<?= $d->quantite?>"  name="quantite" id="count">
            <input placeholder="category" type="text" value="<?= $d->category?>" name="category" id="Category">
            <button type="submit" id="submit" name="up" >Update</button>
        </div>
</form><br><br>

        <footer>
            <h5 style="margin: 100px 0;font-family: cursive; ">&copy;  TDD 113</h5>
        </footer>

</body>
</html> 

