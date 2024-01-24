<?php require('header.php')?>
        <div class="content">
            <h1>Bruschetta<br><span>Restaurant</span> <br></h1>
            <p class="par">We are available from 11:00 am to 00:00! <br>Explorez l'harmonie parfaite du sucré et du salé avec nos viandes au miel exquises
                <br> Une expérience culinaire à ne pas manquer, alliant tendreté et saveurs envoûtantes
            <br> Votre satisfaction est notre objectif
            <br> vous êtes les bienvenues Avenue Yasser Arafet en Face Banque Zitouna, Sousse 4047 Sousse, Tunisie.
            <br>infos & réservations 54 551 467 </p>
            <form method="post">
                <button class="cn"><a href="menu.php">MENU</a></button>
                    <div class="icons">
                        <a href="www.facebook.com"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="www.instagram.com"><ion-icon name="logo-instagram"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <?php
    if (isset($_POST) && $_POST){
        include_once("dbconnect.php");
        
        $sql = "SELECT `id`, `nom` , `prenom` , `email` ,FROM `inscription` WHERE `email` = '" . $_POST['email']. "' and `motdepasse` = '" . $_POST['motdepasse'] . "';";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) == 0){
            echo "User not found: Check your credentail";
        }else{
            $inscription = mysqli_fetch_assoc($result);

            session_start();
            // Set session variables
            $_SESSION["id"] = $signup['id'];
            $_SESSION["nom"] = $signup['nom'];
            $_SESSION["prenom"] = $signup['prenom'];
            $_SESSION["email"] = $signup['email'];
          

            
            header('Location: gallery_action/index.phpindex.php');
            die;
        }
        $conn->close();
    }
?>
</body>
</html>