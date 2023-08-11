<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miam</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Register</h1>

    <form action="?action=register">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" placeholder="Username :">
        <br>
        <label for="username">Email :</label>
        <input type="mail" name="email" placeholder="Email :">
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" placeholder="Password :">
        <br>
        <label for="passwordConfirmation">Confirmer le mot de passe :</label>
        <input type="passwordConfirmation" name="passwordConfirmation" placeholder="Password :">
    </form>
    
</body>
</html>