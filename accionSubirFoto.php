<?php
session_start();

$_SESSION['cont'] += 1;

echo 'Hola';

header("Location:index.php");
?>