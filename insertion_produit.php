<?php 
$db_username = 'root';
$db_password = '';
$db_name     = 'projet_java';
$db_host     = 'localhost';
$db = mysqli_connect($db_host,$db_username,$db_password,$db_name)
       or die('could not connect to database');
if(isset($_POST['ajouter'])){
    $code=$_POST['code_produit'];
    $nom=$_POST['nom_produit'];
    $marque=$_POST['marque_produit'];
    $nombre_en_stock=$_POST['nombre_en_stock'];
    $description_produit=$_POST['descprition_produit'];
    $id_categorie=$_POST['id_categorie'];
    $prix=$_POST['prix_produit'];
    $sql= " INSERT INTO produit  VALUES('$code','$nom','$marque','$nombre_en_stock','$description_produit','$id_categorie','$prix')";

    $db->query($sql);

     echo "<script>alert('Vous avez ajouté un produit');</script>";
     header("location:./page_produit.php");
}