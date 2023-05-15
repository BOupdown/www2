    <?php
    // Démarrer la session
    // session_start();

    require('bddData.php');
    // Tableau des catégories avec les produits et leurs informations
    $taille = 300;

    $boulangerie = get_data("boulangerie");
    $patisserie = get_data("patisserie");
    $viennoiserie = get_data("viennoiserie");

    // Insertion des données de la boulangerie
    foreach ($boulangerie as $produit) {
        $ref = $produit['ref'];
        $nom = $produit['nom'];
        $prix = $produit['prix'];
        $description = $produit['description'];
        $image = $produit['image'];

        $sql = "INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('$ref', '$nom', '$prix', '$description', '$image', 'boulangerie')";
    }
    // Insertion des données de la pâtisserie
    foreach ($patisserie as $produit) {
        $ref = $produit['ref'];
        $nom = $produit['nom'];
        $prix = $produit['prix'];
        $description = $produit['description'];
        $image = $produit['image'];

        $sql = "INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('$ref', '$nom', '$prix', '$description', '$image', 'patisserie')";
    }

    // Insertion des données de la viennoiserie
    foreach ($viennoiserie as $produit) {
        $ref = $produit['ref'];
        $nom = $produit['nom'];
        $prix = $produit['prix'];
        $description = $produit['description'];
        $image = $produit['image'];

        $sql = "INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('$ref', '$nom', '$prix', '$description', '$image', 'viennoiserie')";
    }

    // // Encodez votre tableau en JSON
    // $json_data = json_decode($boulangerie);

    // // Ouvrez le fichier en écriture
    // $file = fopen('boulangerie.json', 'w');

    // // Écrivez le JSON dans le fichier
    // fwrite($file, $json_data);

    // // Fermez le fichier
    // fclose($file);
    ?>
