<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Supermarchet</title>
  <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
  <!-- Barre de navigation -->
  <nav>
    <img class="image-plus" src="./images/gestion-stock.jpg">
    <h1>Gestion de Stock</h1>
    <div class="onglets">
      <p class="link"><a href="page_utilisateur.php">Utilisateur</a></p>
      <p class="link"><a href="page_produit.php">Produit</a></p>
      <p class="link"><a href="page_categorie.php">Catégorie</a></p>
      <form>
        <input type="search" placeholder="Rechercher">
        </form>
      <form action="mailto:youraddr@domain.tld" method="GET">
         <input  type="submit" value="Contact ">
     </form>

      <!-- <input class="styled" href="" type="button" value="Contact"> -->
      <!-- <a  class="h__slogan--btn" href="mailto:est.ac.ma"><i class="fas fa-mail">Contactez-nous</i></a>
        <a href="tel:0537881561"><i class="fas fa-phone">Appeler le Supérmarché</i></a> -->
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <?php
  if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Erreur</p>";
                }
                ?>