<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="./css/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <img class="image-ronde" src="./images/Login.jpg">
                <h1>Connexion</h1>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="user_name" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>
                <input type="checkbox"  name="se_souvenir_de_moi" checked>
                 <label >Se Souvenir de moi</label>
                <input type="submit" name="submit" value='LOGIN' >
                <p ><a href="mailto:abali.medamine7@gmail.com"> Contactez-nous ici.<a></p>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>