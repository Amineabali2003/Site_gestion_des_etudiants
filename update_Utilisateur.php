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
        $id = $_POST['id'];
        $user_name = $_POST['user_name'];
        $mot_de_passe = $_POST['mot_de_passe'];

        $sql= " UPDATE `utilisateur` SET `id`='$id',`user_name`='$user_name',`mot_de_passe`='$mot_de_passe' WHERE id=$userid ";

       $db->query($sql);

        echo "<script>alert('Vous avez modifier un utilisateur');</script>";
        header("location:./page_utilisateur.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mettre à jour Utilisateur</title>
</head>
<body>
                <h1>Mettre à jour cet Utilisateur </h1>
       
       <div class="container">
        <div class="row">
        <div class="col-8">

        <?php 

        $userid = intval ($_GET['id']);
        $result = $db->query("SELECT  `id`, `user_name`,`mot_de_passe` FROM `utilisateur` WHERE id=$userid");
        if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $user_name = $row['user_name'];
        $mot_de_passe = $row['mot_de_passe'];
?>

        

                <form action="" method="POST" class="form-group">
                        ID Utilisateur :
                        <input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
                        Identifiant : 
                        <input type="text" name="user_name" class="form-control" value="<?php echo $user_name; ?>">
                        Mot de passe : 
                        <input type="text" name="mot_de_passe" class="form-control" value="<?php echo $mot_de_passe; ?>">

                        <input type="submit" name="updatebtn"  value="Mettre à jour" class="btn btn-primary mt-3">
                </form>
                <?php }} 
                                ?>
        </div>
        </div>
       </div>
        
</body>
</html>