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
                <li><a href="produit.php?cat=boulangerie">Boulangerie</a></li>
                <li><a href="produit.php?cat=patisserie">Patisserie</a></li>
                <li><a href="produit.php?cat=viennoiserie">Viennoiserie</a></li>
                <li><a href="panier.php">Panier</a></li>
                <li><a href="contact.php">Contact</a></li>
        </nav>
    </div>
    <br><br>
<?php
include 'varSession.inc.php';

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

if (isset($_POST['nom']) && isset($_POST['qte'])) {
  if (isset($_SESSION['cart'][$_POST["nom"]])) {
    $_SESSION['cart'][$_POST["nom"]] += $_POST['qte'];
  } else {
    $_SESSION['cart'][$_POST["nom"]] = $_POST['qte'];
  }

  unset($_POST["nom"]);
  unset($_POST["qte"]);
}

        echo "<div class='tab1'>";
        echo "<table border='1'>";
        echo "<tr><th>Image</th><th>Ref</th><th>Nom</th><th>Prix</th><th>Descriptif</th><th>Quantité</th></tr>";

        foreach ($boulangerie as &$p) {
          if (isset($_SESSION['cart'][$p["nom"]])) {
            echo "<tr><td>" . "<img src='" . $p["image"] . "' style='max-width: 300px;'>" . "</td>  <td>" . $p["ref"] . "</td><td>" . $p["nom"] . "</td><td>" . $p["prix"] . "</td><td>" . $p["description"] . "</td><td>".$_SESSION["cart"][$p["nom"]]."</td>";
            echo "</tr>";
          }
        }
        foreach ($patisserie as &$p) {
          if (isset($_SESSION['cart'][$p["nom"]])) {
            echo "<tr><td>" . "<img src='" . $p["image"] . "' style='max-width: 300px;'>" . "</td>  <td>" . $p["ref"] . "</td><td>" . $p["nom"] . "</td><td>" . $p["prix"] . "</td><td>" . $p["description"] . "</td><td>".$_SESSION["cart"][$p["nom"]]."</td>";
            echo "</tr>";
          }
        }
        foreach ($viennoiserie as &$p) {
          if (isset($_SESSION['cart'][$p["nom"]])) {
            echo "<tr><td>" . "<img src='" . $p["image"] . "' style='max-width: 300px;'>" . "</td>  <td>" . $p["ref"] . "</td><td>" . $p["nom"] . "</td><td>" . $p["prix"] . "</td><td>" . $p["description"] . "</td><td>".$_SESSION["cart"][$p["nom"]]."</td>";
            echo "</tr>";
          }
        }
        echo "</table>";

        echo "</div>";

?>


