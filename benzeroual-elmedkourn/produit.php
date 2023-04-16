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
    // inclure le fichier contenant les tableaux
    include 'varSession.inc.php';

    // Démarrer la session
    session_start();

    // Récupérer la catégorie depuis l'URL
    if (isset($_GET['cat'])) {
        $categorie = $_GET['cat'];

        $found = false;
        switch ($categorie) {
            case "boulangerie":
                $found = true;
                $el = $boulangerie;
                break;
            case "patisserie":
                $found = true;
                $el = $patisserie;
                break;
            case "viennoiserie":
                $found = true;
                $el = $viennoiserie;
        }
    }

    if ($found) {

        echo "<div class='tab1'>";
        echo "<table border='1'>";
        echo "<tr><th>Image</th><th>Ref</th><th>Nom</th><th>Prix</th><th>Descriptif</th><th>Panier</th></tr>";

        foreach ($el as &$produit) {
            echo "<tr><td>" . "<img src='" . $produit["image"] . "' style='max-width: 300px;'>" . "</td>  <td>" . $produit["ref"] . "</td><td>" . $produit["nom"] . "</td><td>" . $produit["prix"] . "</td><td>" . $produit["description"] . "</td>";
            echo "<td style=''>";
            echo "<form action='panier.php' method='post'>";
            echo "<input type='hidden' name='nom' value='{$produit['nom']}'>";
            echo "<input type='number' name='qte'>";
            echo "<div style='margin: 10px'/>";
            echo "<button style='width:70%' class='panier' type='submit'>ajouter au panier</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "</div>";
    } else {
        // Si aucune catégorie n'est spécifiée dans l'URL, afficher un message d'erreur
        echo "<p>hello</p>";
        exit;
    }






    ?>



</body>

</html>