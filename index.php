<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моё домашнее задание</title>
</head>

<body>
    <?php if (!empty($_SESSION['username'])): ?>
        <h1>Привет,
            <?= htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8') ?>!
        </h1>
        <p><a href="exit.php">Выйти</a></p>
    <?php else: ?>
        <?php
        include 'index.html';
        ?>
    <?php endif; ?>

</body>

</html>