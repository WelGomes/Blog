<?php

    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $BASE_URL ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Oswald:wght@200&display=swap" rel="stylesheet">
    <title>Blog Codar</title>
</head>
<body>
    <header>
        <a href="<?php echo $BASE_URL ?>" id="logo">
            <img src="<?php echo $BASE_URL ?>img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li> <a href="<?php echo  $BASE_URL?>index.php" class="nav-link"> Home </a> </li>
                <li> <a href="<?php echo $BASE_URL?>contato.php" class="nav-link"> Contato </a> </li>
            </ul>
        </nav>
    </header>
