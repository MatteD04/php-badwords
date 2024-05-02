<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>testo originale</h2>
        <p><?php echo $text; ?></p>
        <p>lunghezza: <?php echo strlen($censoredText); ?> caratteri</p>
    </div>

    <div>
        <h2>testo censurato</h2>
        <p><?php echo $censoredText; ?></p>
        <p>lunghezza: <?php echo strlen($censoredText); ?> caratteri</p>
    </div>
</body>
</html>