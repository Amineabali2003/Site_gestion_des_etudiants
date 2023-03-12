<?php 
 $db_username = 'root';
 $db_password = '';
 $db_name     = 'projet_java';
 $db_host     = 'localhost';
 $db = mysqli_connect($db_host,$db_username,$db_password,$db_name)
        or die('could not connect to database');

if(isset($_POST['updatebtn']))
{
        $userid = intval ($_GET['id']);
        $id = $_POST['id_categorie'];
        $nom = $_POST['nom_categorie'];

        $sql= " UPDATE `categorie` SET `id`='$id_categorie',`nom`='$nom_categorie' WHERE id=$userid ";

       $db->query($sql);

        echo "<script>alert('Vous avez modifier une catégorie');</script>";
        header("location:./page_categorie.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mettre à jour catégorie</title>
</head>
<body>
                <h1>Mettre à jour cette catégorie </h1>
       
       <div class="container">
        <div class="row">
        <div class="col-8">

        <?php 

        $userid = intval ($_GET['id']);
        $result = $db->query("SELECT  `id`, `nom` FROM `categorie` WHERE id=$userid");
        if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $nom = $row['nom'];
?>

        

                <form action="" method="POST" class="form-group">
                        ID catégorie :
                        <input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
                        Nom catégorie : 
                        <input type="text" name="user_name" class="form-control" value="<?php echo $nom; ?>">

                        <input type="submit" name="updatebtn"  value="Mettre à jour" class="btn btn-primary mt-3">
                </form>
                <?php }} 
                                ?>
        </div>
        </div>
       </div>
        
</body>
</html>