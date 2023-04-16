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
      input[type=text], input[type=email], input[type=tel], textarea {
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
          <li><a href="boulangerie.php">Boulangerie</a></li>
          <li><a href="patisserie.php">Patisserie</a></li>
          <li><a href="viennoiserie.php">Viennoiserie</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>

    <?php
    session_start();
    ?>

<style>
		input[type="submit"] {
			background-color: orange;
			color: white;
			border: none;
			padding: 10px 20px;
			cursor: pointer;
		}
	</style>

    <h1>Formulaire de contact</h1>

    <div class="form-container">

      <form action="#" method="POST">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
    
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
    
        <label for="dob">Date de naissance :</label>
        <input type="date" id="dob" name="dob">
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
        </select><br><br>
    
    
        <label for="subject">Sujet :</label>
        <input type="text" id="subject" name="subject" required>
    
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
    
        <button type="submit">Envoyer</button>
      </form>
      </div>
