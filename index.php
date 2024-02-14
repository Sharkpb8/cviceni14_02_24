<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odeslat data do PHP</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="jmeno">Jméno:</label>
        <input type="text" id="jmeno" name="jmeno" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Odeslat">
    </form>
</body>
</html>