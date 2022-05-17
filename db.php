<?php
$pdo = new PDO("mysql:localhost;port=3306;dbname=healthcare",'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
?>
