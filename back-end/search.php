<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front-end/style.css">
    <title>Document</title>
</head>
<body>

    
    <div class="crud">
        <div class="head">
            <h1>gestion de produit</h1>
            <h3>ceate,update, delete et search</h3>
    </div>

    <div class="affichage">
        <div class="outputs">
            <form method="get">
                    <div class="searchBlock">
                        <input  type="text" id="search" value="<?php if (isset($_GET['search'])) {echo $_GET['search'];}?>" name="search" placeholder="Search By Title" >
                    <div class="btnSearch">
                        <button type="submit" name="searchTitle" id="searchTitle">Search By Title</button>
                    </div>
                </div>
            </form><br><br>
            <button class="ajouter" onclick="location.href='../front-end/index.html'">Add Product</button><br>
                <div id="deleteAll">
                    <button class="ajouter" onclick="location.href='../back-end/deleteAll.php'">Delete All</button><br><br>
                </div>
        </div>

    </div>



</body>
</html>
<?php 
require("db.php");

try {
    if ( isset($_GET['search'])) {
    require "searchsql.php" ;
    if ( count($results)>0 ) {
        echo '<table id="customers">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Title</th>';
        echo '<th>price</th>';
        echo '<th>taxes</th>';
        echo '<th>ads</th>';
        echo '<th>discount</th>';
        echo '<th>category</th>';
        echo '<th>quantité</th>';
        echo '<th>update</th>';
        echo '<th>delete</th>';
        echo '</thead>';
        echo '</tr>';
        echo '<tbody id="tbody">';
        foreach ( $results as $d) {
            echo "<tr><td>".$d['id']."</td><td>".$d['title']."</td><td>".$d['price']."</td><td>".$d['taxes']."</td><td>".$d['ads']."</td><td>".$d['discount']."</td><td>".$d['category']."</td><td>".$d['quantite']."</td><td><a href='../back-end/edite.php?id=$d[id]' id='update' >update</a></td><td><a href='../back-end/delet.php?id=$d[id]' id='delet'>delete</a></td></tr>" ;
        }
        }
        else {
        echo '<table id="customers">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Title</th>';
        echo '<th>price</th>';
        echo '<th>taxes</th>';
        echo '<th>ads</th>';
        echo '<th>discount</th>';
        echo '<th>category</th>';
        echo '<th>quantité</th>';
        echo '<th>update</th>';
        echo '<th>delete</th>';
        echo '</thead>';
        echo '</tr>';
        echo '<tbody id="tbody">';
            echo " <tr> <th colspan=11 >No results found.</th> </tr> " ; 
        }
        echo '</tbody>';
        echo '</table>'; 
        
    }
} catch (PDOException $e) {
    echo  $e->getMessage();
}



?> 
