<?php 
$db_username = 'root';
$db_password = '';
$db_name     = 'projet_java';
$db_host     = 'localhost';
$db = mysqli_connect($db_host,$db_username,$db_password,$db_name)
       or die('could not connect to database');
if(isset($_POST['ajouter'])){
    $id=$_POST['id_utilisat'];
    $user_name=$_POST['username_utilisat'];
    $mot_de_passe=$_POST['password'];
    $sql= " INSERT INTO utilisateur  VALUES('$id','$user_name','$mot_de_passe')";

    $db->query($sql);

     echo "<script>alert('Vous avez ajouté un utilisateur');</script>";
     header("location:./page_utilisateur.php");
}