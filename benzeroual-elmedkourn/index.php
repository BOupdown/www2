<!DOCTYPE html>
<html>

  <head>

    <title>Oasis News</title>
    <meta charset="UTF-8">
    <meta name="description" content="Oasis News fournit les dernières news avec une touche de fruité">
    <meta name="keywords" content="oasis, fruits, news">
    <meta name="author" lang="fr" content="Omar and Nezar" />
    <link rel="stylesheet" type="text/css" href="css/oasisCss.css?v=<?php echo time(); ?>">



  </head>

  <body>
  <style>
    
    a {
    text-decoration: none;
    }

    
  
  
</style>


    
    
    <a href="https://www.oasis-sirop.com"><img src="img/feran.png" class="imageSite" alt="Photo du site" width="200" height="150"></a>
    <br>
    <div class="barre">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="produit.php?cat=boulangerie">Boulangerie</a></li> <!-- retirer le ".php" en trop -->
                <li><a href="produit.php?cat=patisserie">Pâtisserie</a></li>
                <li><a href="produit.php?cat=viennoiserie">Viennoiserie</a></li> <!-- retirer le ".php" en trop -->
                <li><a href="index.php?contact.php">Contact</a></li> <!-- retirer le ".php" en trop -->
            </ul>
        </nav>
    </div>
    <br>
    <br>
    <br>
    <br>

    <?php
        session_start();
        
 

        
    ?>

    



    <div class="menu">
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="boulangerie.php">Boulangerie</a></li>
        <li><a href="patisserie.php">Patisserie</a></li>
        <li><a href="viennoiserie.php">Viennoiserie</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    </div>
    <div class="mon-texte">
    <div  id="monDiv">
      <br><br><br>
      <button ><a href="connexion.php">Connexion</a></button>
    </div>
    </div>

    <div style="text-align: center;">
      <video src="img/patiss.mp4" width="640" height="360" controls autoplay></video>
    </div>
    
   <h1 style="text-align: center;">Bienvenue sur notre site de patisserie et boulangerie !</h1>
   
   <footer>
    <div class="footer-content">
      <div class="footer-section about">
        <h2 class="logo-text">O & N Délices</h2>
        <div class="socials">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
      
    </div>
    <div class="footer-bottom">
      &copy; Oasis News | Créé par Omar and Nezar
    </div>
  </footer>
  


  
  </body>
</html>
