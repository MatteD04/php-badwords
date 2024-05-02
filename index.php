<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="GET">
        <div>
            <label for="censored-word">parola da censurare</label>
            <input id="censored-word" name="word" type="text"/>
        </div>
        <div>
            <label for="censored-text">testo</label>
            <textarea id="censored-text" name="text"></textarea>
        </div>
        <div>
            <button type="submit">invia</button>
        </div>
    </form>
</body>
</html>