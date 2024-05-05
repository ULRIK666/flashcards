<?php
// Inkluderer databaseforbindelsesfilen
include 'includes/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
        // Slette prosjektet hvis brukeren bekreftet sletting
        if (isset($_POST['project_id'])) {
            $project_id = $_POST['project_id'];
            $sql = "DELETE FROM projects WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$project_id]);
            header("Location: index.php"); // Redirect brukeren tilbake til prosjektsiden etter sletting
            exit();
        } else {
            // Hvis prosjekt-ID ikke er tilgjengelig, omdiriger tilbake til prosjektsiden
            header("Location: index.php");
            exit();
        }
    } else {
        // Hvis brukeren ikke bekreftet sletting, redirect dem tilbake til prosjektsiden
        header("Location: index.php");
        exit();
    }
}
?>
