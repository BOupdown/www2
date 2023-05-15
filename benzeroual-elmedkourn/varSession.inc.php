    <?php
    // Démarrer la session
    session_start();

    // Tableau des catégories avec les produits et leurs informations
    $taille = 300;

    $boulangerie = array(
        array(
            "ref" => "ref1",
            "nom" => "Baguette",
            "prix" => "1.0 euros",
            "description" => "La baguette traditionnelle française, croustillante à l'extérieur et moelleuse à l'intérieur.",
            "image" => "img/baguette.jpg"
        ),

        
        array(
            "ref" => "ref2",
            "nom" => "Pain rond",
            "prix" => "1.50 euros",
            "description" => "Un pain rond aux notes légèrement sucrées, parfait pour les sandwiches ou les tartines.",
            "image" => "img/painrond.jpeg"
        ),
        array(
            "ref" => "ref3",
            "nom" => "Couronne Bordelaise",
            "prix" => "1.5 euros",
            "description" => "Une couronne de pain aux accents de vin rouge de Bordeaux, idéale pour accompagner une planche de charcuterie.",
            "image" => "img/couronneBordelaise.jpg"
        ),
        array(
            "ref" => "ref4",
            "nom" => "Bagel",
            "prix" => "1.0 euros",
            "description" => "Un petit pain rond et moelleux, avec un trou au milieu, parfait pour y mettre du fromage frais, du saumon fumé ou du bacon.",
            "image" => "img/bagel.png"
        ),
        array(
            "ref" => "ref5",
            "nom" => "Pain Multigrains",
            "prix" => "1.50 euros",
            "description" => "Un pain aux multiples céréales, riches en fibres et en goût.",
            "image" => "img/pain multigrains.png"
        )
    );

    $patisserie = array(
        array(
            "ref" => "ref6",
            "nom" => "Paris-Brest",
            "prix" => "6 euros",
            "image" => "img/img1.png",
            "description" => "Paris Brest: Une pâtisserie française en forme de couronne, faite de pâte à choux, garnie de crème pralinée et d'amandes effilées."
    
    
        ),
        array(
            "ref" => "ref7",
            "nom" => "Macaron",
            "prix" => "2.5 euros",
            "image" => "img/img2.png",
            "description" => "Macarons: Des petits biscuits ronds et colorés, avec une coque croquante et une ganache fondante au milieu, originaires de France.",
    
    
        ),
        array(
            "ref" => "ref8",
            "nom" => "Eclair",
            "prix" => "3 euros",
            "image" => "img/img3.png",
            "description" => "Éclairs: Des pâtisseries allongées en forme de tube, faites de pâte à choux, remplies de crème pâtissière et garnies de glaçage au chocolat.",
    
    
        ),
        array(
            "ref" => "ref9",
            "nom" => "Foret Noire",
            "prix" => "5 euros",
            "image" => "img/img5.png",
            "description" => "Forêt Noire: Un gâteau allemand en couches, composé de génoise au chocolat, de crème fouettée et de cerises, souvent décoré de copeaux de chocolat noir.",
    
        ),
    
        array(
            "ref" => "ref10",
            "nom" => "Millefeuilles",
            "prix" => "10 euros",
            "image" => "img/img4.png",
            "description" => "Millefeuille: Un dessert français classique à base de feuilletage, de crème pâtissière et de glaçage royal.",
    
        ),
    
    );
    
    
    $viennoiserie = array(
        array(
            "ref" => "ref11",
            "nom" => "Croissant",
            "prix" => "1.5 euros",
            "image" => "img/img6.png",
            "description" => "Le croissant : une viennoiserie en forme de croissant, feuilletée et croustillante, traditionnellement mangée au petit-déjeuner."
        ),
        array(
            "ref" => "ref12",
            "nom" => "Baguette Viennoise",
            "prix" => "2 euros",
            "image" => "img/img7.png",
            "description" => "La baguette viennoise : une viennoiserie en forme de baguette, moelleuse et légèrement sucrée, souvent servie au petit-déjeuner ou au goûter."
        ),
        array(
            "ref" => "ref13",
            "nom" => "Chocolatine",
            "prix" => "1.5 euros",
            "image" => "img/img8.png",
            "description" => "Le pain au chocolat : une viennoiserie en forme de bâtonnet, feuilletée et fourrée de chocolat, souvent mangée au petit-déjeuner ou en collation."
        
        ),
        array(
            "ref" => "ref14",
            "nom" => "Brioche",
            "prix" => "2.5 euros",
            "image" => "img/img9.png",
            "description" => "La brioche : une viennoiserie en forme de boule ou de tresse, moelleuse et sucrée, souvent servie au petit-déjeuner ou en dessert."
        
        ),
        array(
            "ref" => "ref15",
            "nom" => "Tarte Tatin",
            "prix" => "5.5 euros",
            "image" => "img/img10.png",
            "description" => "La tarte Tatin : cette tarte aux pommes renversée est souvent considérée comme une viennoiserie en raison de sa croûte feuilletée et croustillante. "
        )
        );

$host = "localhost";
$dbname = "Oasisdata";
$username = "Oasis";
$password = "aequo3AVoo4y";
        

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
