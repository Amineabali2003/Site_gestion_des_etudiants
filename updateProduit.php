<?php 
 $db_username = 'root';
 $db_password = '';
 $db_name     = 'projet_java';
 $db_host     = 'localhost';
 $db = mysqli_connect($db_host,$db_username,$db_password,$db_name)
        or die('could not connect to database');

if(isset($_POST['updatebtn']))
{
        $userid = intval ($_GET['code']);
        $code = $_POST['code'];
        $nom = $_POST['nom'];
        $marque = $_POST['marque'];
        $nombre_en_stock = $_POST['nombre_en_stock'];
        $descrption_produit = $_POST['descrption_produit'];
        $id_categorie = $_POST['id_categorie'];
        $prix = $_POST['prix'];

        $sql= " UPDATE `produit` SET `code`='$code',`nom`='$nom',`marque`='$marque',`nombre_en_stock`='$nombre_en_stock',`descrption_produit`='$descrption_produit',`id_categorie`='$id_categorie',`prix`='$prix' WHERE code=$userid ";

       $db->query($sql);

        echo "<script>alert('Vous avez modifier un utilisateur');</script>";
        header("location:./page_produit.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mettre à jour Produit</title>
</head>
<body>
                <h1>Mettre à jour ce Produit </h1>
       
       <div class="container">
        <div class="row">
        <div class="col-8">

        <?php 

        $userid = intval ($_GET['id']);
        $result = $db->query("SELECT  `code`, `nom`,`marque`,`nombre_en_stock`,`description_produit`,`id_categorie`,`prix` FROM `produit` WHERE code=$userid");
        if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
        $code = $row['code'];
        $nom = $row['nom'];
        $marque = $row['marque'];
        $nombre_en_stock = $row['nombre_en_stock'];
        $description_produit = $row['description_produit'];
        $id_categorie = $row['id_categorie'];
        $prix = $row['prix'];
?>

        

                <form action="" method="POST" class="form-group">
                        Code :
                        <input type="text" name="code" class="form-control" value="<?php echo $code; ?>">
                        Nom : 
                        <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>">
                        Marque : 
                        <input type="text" name="marque" class="form-control" value="<?php echo $marque; ?>">
                        Nombre en stock : 
                        <input type="text" name="nombre_en_stock" class="form-control" value="<?php echo $nombre_en_stock; ?>">
                        Descrption produit : 
                        <input type="textarea" name="description_produit" class="form-control" value="<?php echo $description_produit; ?>">
                        ID catégorie : 
                        <input type="text" name="id_categorie" class="form-control" value="<?php echo $id_categorie; ?>">
                        Prix : 
                        <input type="text" name="prix" class="form-control" value="<?php echo $prix; ?>">

                        <input type="submit" name="updatebtn"  value="Mettre à jour" class="btn btn-primary mt-3">
                </form>
                <?php }} 
                                ?>
        </div>
        </div>
       </div>
        
</body>
</html>