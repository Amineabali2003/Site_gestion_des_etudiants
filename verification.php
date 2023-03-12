<?php
session_start();
 try{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'projet_java';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host,$db_username,$db_password,$db_name)
           or die('could not connect to database');   
   }
   catch(Exception $e){
      die('Connection failed' .db->connect_error);
   }
   if(isset($_POST['submit'])){
      $user_name=$_POST['user_name'];
      $mot_de_passe=$_POST['mot_de_passe'];
      $Requete = "SELECT user_name,mot_de_passe FROM utilisateur WHERE user_name like '$user_name' and mot_de_passe like '$mot_de_passe'";
      $resultat=mysqli_query($db,$Requete);
      $ligne=mysqli_num_rows($resultat);
      if($ligne==1){
       header("location:./principale.php");
      }
      else{
         header("location:./index.php");
      }
      $resultat->close();    
      $db->close(); // fermer la connexion
    }
?>