<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="java/header.js" async></script>
    <script src="java/projets.js" async></script>
    <script src="java/competence.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="https://kit.fontawesome.com/29ac4cabe1.js"></script>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/presentation.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/projets.css">
    <link rel="stylesheet" href="CSS/competence.css">
    <link rel="stylesheet" href="CSS/footer.css">

    <title>Document</title>
</head>
<body class="scroller">
        <section>
        <?php
                include 'PHP/header.php';
                ?>
        </section>
        <section>
        <?php
                include 'PHP/presentation.php';
                ?>
        </section>
        <section>
        <?php   
                include 'PHP/projets.php';
                ?>
        </section>
        <section>
        <?php   
                include 'PHP/footer.php';
                ?>
        </section>
    
</body>
</html>