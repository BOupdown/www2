<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page de connexion</title>
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
$data_json = file_get_contents("user.json");
$users = json_decode($data_json, true);
$error = false;
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $connect = false;
    foreach ($users as $u) {
        if ($u["username"] == $_POST["username"] && $u["password"] == $_POST["password"]) {
            $connect = true;
        }
    }
        
    if ($connect) {
        header('Location: index.php');
    } else {
        $error = true;
    }

    unset($_POST["username"]);
    unset($_POST["password"]);
}
?>

<body>

    <h2>Connexion</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Nom d'utilisateur:</label>
        <input type="text" name="username">
        <label>Mot de passe:</label>
        <input type="password" name="password">
        <?php
        if ($error) {
            echo "<p style=\"color: red\">Mauvais identifiant ou mot de passe !</p>";
        }
        ?>
        <input type="submit" value="Connexion">
    </form>
</body>

</html>