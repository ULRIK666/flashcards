<?php
// Inkluderer databaseforbindelsesfilen
include 'includes/db_connection.php';

// Sjekk om skjemaet er sendt
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hent prosjektnavnet fra skjemaet
    $project_name = $_POST['project_name'];

    try {
        // Forbered SQL-setningen for å legge til prosjektet
        $sql = "INSERT INTO projects (name) VALUES (?)";

        // Kompilere SQL-setningen og utføre den
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$project_name]);

        echo "Project added successfully";
    } catch(PDOException $e) {
        // Håndter eventuelle feil under tilkoblingen
        echo "Error: " . $e->getMessage();
        die();
    }
}
?>
