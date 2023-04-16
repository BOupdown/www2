<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page d'inscription</title>
    <style>
        body {
            background-color: #FFA500;
            font-family: Arial, sans-serif;
            color: #000000;
        }

        h2 {
            text-align: center;
            color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            border: 1px solid #000000;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            margin: 50px auto;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #000000;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #000000;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<?php
$error = false;
$data_json = file_get_contents("user.json");
$users = json_decode($data_json, true);
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["username"]) && isset($_POST["password"])) {
    $exist = false;
    foreach ($users as $u) {
        if ($u["username"] == $_POST["username"]) {
            $exist = true;
        }
    }

    if (!$exist) {
        $user = array(
            "nom" => $_POST["nom"],
            "prenom" => $_POST["prenom"],
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        );

        array_push($users, $user);
        $json_data = json_encode($users);
        $file = fopen('user.json', 'w');
        fwrite($file, $json_data);
        fclose($file);

        header('Location: index.php');
    } else {
        $error = true;
    }

    unset($_POST["nom"]);
    unset($_POST["prenom"]);
    unset($_POST["username"]);
    unset($_POST["password"]);
}
?>

<body>

    <h2>Inscription</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Nom de famille:</label>
        <input type="text" name="nom">
        <label>Prénom:</label>
        <input type="text" name="prenom">
        <label>Nom d'utilisateur:</label>
        <input type="text" name="username">
        <label>Mot de passe:</label>
        <input type="password" name="password">
        <?php
        if ($error) {
            echo "<p style=\"color: red\">Ce nom d'utilisateur existe déjà !</p>";
        }
        ?>
        <input type="submit" value="Inscription">
    </form>

</body>

</html>