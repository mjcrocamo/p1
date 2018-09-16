<?php require('quote-logic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/main.css"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maggie Crocamo</title>
</head>
<body>
    <div class="container p-3">
    <h1 class="header">Maggie Crocamo </h1>
        <img src="img/Maggie.png" alt="Maggie Crocamo">
        <h2 class="header">About Me</h2>
        <div class="paragraph">
            <p class="aboutme"> 
                I'm Maggie and I live in South Boston. I currently work at Wayfair in Boston as an EDI Infrastructure Engineer and I'm currently 
                pursuing my masters in Digital Media Design and Web Technologies here at Harvard Extension. I hope to break into software engineering
                at Wayfair come the Spring. I love to listen to music. I also hip-hop dance and play soccer in my free time. 
            </p>
        </div>
        <h2 class="header">Random Quote</h2>
        <p class="quotetext"><?php echo $quote; ?></p>
    </div>
</body>
</html>