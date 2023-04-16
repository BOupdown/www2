<!DOCTYPE html>
<html>

  <head>

    <title>Oasis News</title>
    <meta charset="UTF-8">
    <meta name="description" content="Oasis News fournit les dernières news avec une touche de fruité">
    <meta name="keywords" content="oasis, fruits, news">
    <meta name="author" lang="fr" content="Omar and Nezar" />
    <link rel="stylesheet" type="text/css" href="css/oasisCss.css">

  </head>

  <body>

    <a href="https://www.oasis-sirop.com"><img src="img/feran.png" class="imageSite" alt="Photo du site" width="200" height="150"></a>
    <br>
    <div class="barre">
      <nav>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="boulangerie.php">Boulangerie</a></li>
          <li><a href="patisserie.php">Patisserie</a></li>
          <li><a href="viennoiserie.php">Viennoiserie</a></li>
          <li><a href="contact.php">Contact</a></li>
      </nav>
    </div>
    <br><br>

    <?php
// inclure le fichier contenant les tableaux
include 'varSession.inc.php';

// Démarrer la session
session_start();

// Récupérer la catégorie depuis l'URL
if (isset($_GET['cat'])) {
    $categorie = $_GET['cat'];

    echo "<div class='tab1'>";
echo "<table border='1'>";
echo "<tr><th>Image</th><th>Ref</th><th>Nom</th><th>Prix</th><th>Descriptif</th></tr>";
foreach ($categorie as $produit) {
    echo "<tr><td>" . "<img src='" . $produit["image"] . "' style='max-width: 300px;'>" . "</td>  <td>" . $produit["ref"] . "</td><td>" . $produit["nom"] . "</td><td>" . $produit["prix"] . "</td><td>" . $produit["description"] . "</td></tr>";
}
echo "</table>";

echo "</div>";
} else {
    // Si aucune catégorie n'est spécifiée dans l'URL, afficher un message d'erreur
    echo "<p>hello</p>";
    exit;
}

// Vérifier que la catégorie est valide
if (!array_key_exists($categorie, $produits_par_categorie)) {
    echo "<p>Catégorie invalide</p>";
    echo "$categorie";
    exit;
}




?>



  </body>
</html>