<!DOCTYPE html>
<html>

<head>

    <title>Oasis News</title>
    <meta charset="UTF-8">
    <meta name="description" content="Oasis News fournit les dernières news avec une touche de fruité">
    <meta name="keywords" content="oasis, fruits, news">
    <meta name="author" lang="fr" content="Omar and Nezar" />
    <link rel="stylesheet" type="text/css" href="css/oasisCss.css">

    <style>
        /* Style pour centrer le formulaire */
        .form-container {
            width: 50%;
            margin: auto;
        }

        /* Style pour les champs du formulaire */
        input[type=text],
        input[type=email],
        input[type=tel],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        /* Style pour le bouton de soumission */
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Style pour le bouton de soumission quand il est survolé */
        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Style pour la section contenant les champs du formulaire */
        .form-section {
            display: flex;
            flex-direction: column;
        }

        /* Style pour les libellés des champs du formulaire */
        label {
            font-weight: bold;
        }

        /* Style pour le titre de la page */
        h1 {
            text-align: center;
        }
    </style>

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
            </ul>
        </nav>
    </div>

    <?php
    // session_start();
    ?>

    <h1>Formulaire de contact</h1>

    <div class="form-container">
        <form action="#" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
            <?php
            if (isset($_POST['submit'])) {
                if (empty($_POST['name'])) {
                    echo "<p class='error'>Veuillez saisir votre nom</p>";
                }
            }
            ?>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <?php
            if (isset($_POST['submit'])) {
                if (empty($_POST['email'])) {
                    echo "<p class='error'>Veuillez saisir votre adresse e-mail</p>";
                }
            }
            ?>

            <label for="dob">Date de naissance :</label>
            <input type="date" id="dob" name="dob">
            <?php
            if (isset($_POST['submit'])) {
                if (empty($_POST['dob'])) {
                    echo "<p class='error'>Veuillez saisir votre date de naissance</p>";
                }
            }
            ?>
            <br><br>

            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="phone">

            <label for="emploi">Emploi :</label>
            <select id="emploi" name="emploi">
                <option value="">Sélectionner un emploi</option>
                <option value="developpeur">Développeur</option>
                <option value="designer">Designer</option>
                <option value="consultant">Consultant</option>
                <option value="marketing">Marketing</option>
            </select>
            <?php
            if (isset($_POST['submit'])) {
                if (empty($_POST['emploi'])) {
                    echo "<p class='error'>Veuillez sélectionner votre emploi</p>";
                }
            }
            ?><br><br>

            <label for="subject">Sujet :</label>
            <input type="text" id="subject" name="subject" required>
            <?php
            if (isset($_POST['submit'])) {
                if (empty($_POST['subject'])) {
                    echo "<p class='error'>Veuillez saisir le sujet de votre message</p>";
                }
            }
            ?>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
            <?php
            if (isset($_POST['submit'])) {
                if (empty($_POST['message'])) {
                    echo "<p class='error'>Veuillez saisir votre message</p>";
                }
            }
            ?>

            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $emploi = $_POST['emploi'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $errors = [];

        if (empty($name)) {
            $errors['name'] = 'Le nom est obligatoire';
        }

        if (empty($email)) {
            $errors['email'] = 'L\'adresse email est obligatoire';
        }

        if (empty($dob)) {
            $errors['dob'] = 'La date de naissance est obligatoire';
        }

        if (empty($phone)) {
            $errors['phone'] = 'Le numéro de téléphone est obligatoire';
        }

        if (empty($emploi)) {
            $errors['emploi'] = 'L\'emploi est obligatoire';
        }

        if (empty($subject)) {
            $errors['subject'] = 'Le sujet est obligatoire';
        }

        if (empty($message)) {
            $errors['message'] = 'Le message est obligatoire';
        }

        if (count($errors) === 0) {
            // Envoi de l'email
            // ...
            // Redirection vers une page de confirmation
            header('Location: index.php');
            exit;
        }
    }
    ?>


    <script src="js/fonctions.js"></script>


</body>

</html>