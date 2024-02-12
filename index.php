<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrácia</title>
</head>

<body>
    <h1>Zaregistruj sa!</h1>
    <form action='connect.php' method="POST">
        <label for="name">Meno: </label><br>
        <input type='text' name='name' id="name" required/><br><br>

        <label for="email">Email: </label><br>
        <input type='email' name='email' id="email" required/><br><br>

        <label for="password">Heslo: </label><br>
        <input type='password' name='password' id="password" required/><br><br>

        <label for="phone">Telefónne číslo: </label><br>
        <input type='text' name='phone' id="phone" required/><br><br>

        <input type='submit' name='submit' id="submit"/>
    </form>
</body>
</html>
