
<?php
require("db.php");
try {
    if (isset($_POST['sub'])){
        $title=$_POST['title'];
        $price=$_POST['price'];
        $taxes=$_POST['taxes'];
        $ads=$_POST['ads'];
        $discount=$_POST['discount'];
        $category=$_POST['category'];
        $quantite=$_POST['quantite'];
        $sql="INSERT INTO `produit`(`title`, `price`, `taxes`, `ads`,`discount`,`category`,`quantite`) VALUES ('$title','$price','$taxes','$ads','$discount','$category','$quantite')";
        $db->exec($sql); 
        
        header('location:../front-end/index.html');
    };   

} catch (PDOException $th) {
    echo $th->getMessage();
}


?>