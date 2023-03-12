<?php 
$db_username = 'root';
$db_password = '';
$db_name     = 'projet_java';
$db_host     = 'localhost';
$db = mysqli_connect($db_host,$db_username,$db_password,$db_name)
       or die('could not connect to database');
if(isset($_POST['ajouter'])){
    $id=$_POST['id_categorie'];
    $nom=$_POST['nom_categorie'];
    $sql= " INSERT INTO categorie  VALUES('$id','$nom')";

    $db->query($sql);

     echo "<script>alert('Vous avez ajouté une catégorie');</script>";
     header("location:./page_categorie.php");
}