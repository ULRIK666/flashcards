<?php
// Databaseinnstillinger
$host = 'localhost'; // Databasens vert
$dbnavn = 'mydb'; // Databasens navn
$brukernavn = 'root'; // Standard brukernavn
$passord = ''; // Standard passord (tomt for 'root' brukeren)

try {
    // Opprett en PDO-tilkobling
    $pdo = new PDO("mysql:host=$host;dbname=$dbnavn", $brukernavn, $passord);

    // Angi PDO-feilmeldingsmodus til unntak
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Angi tegnsettet til UTF-8
    $pdo->exec("SET NAMES utf8");
} catch(PDOException $e) {
    // Håndter eventuelle feil under tilkoblingen
    echo "Feil under tilkobling til databasen: " . $e->getMessage();
    die();
}
?>
