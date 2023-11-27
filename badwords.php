<?php
    $text = $_GET["testo"];
    $badWord = $_GET["censura"];
    $hiddenword = str_replace($badWord, '***', $text)
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords</title>
    </head>
    <body>
    
    <h1>
        <?php echo $text ?>
    </h1>
    
    <h1>
        <?php echo $hiddenword ?>
    </h1>
    </body>
    </html>