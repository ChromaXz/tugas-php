<?php
include_once "webMenu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web demo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Web Dewa Gede Andika Andara Putra</h1>
    </header>
    <nav>
        <?php
        $currentPage = isset($_GET['hal']) ? $_GET['hal'] : 'home';
        foreach ($menuAtas as $key => $value) {
            $active = ($key == $currentPage) ? 'active' : '';
            echo "<a href='index.php?hal=$key' class='$active'>$value</a>";
        }
        ?>
    </nav>
    <main>
    <script src="script.js"></script>
