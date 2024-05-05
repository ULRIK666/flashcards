<?php
// Inkluderer databaseforbindelsesfilen
include 'includes/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Create Project</h1>
        <form action="add_project.php" method="post">
            <input type="text" name="project_name" placeholder="Project Name" required>
            <button type="submit">Add Project</button>
        </form>
    </div>

    

    <div class="container">
    <h2>Flashcard projects</h2>
    <div class="project_container"> 
    <?php
// Henter alle prosjektnavnene fra databasen
$sql = "SELECT id, name FROM projects";
$stmt = $pdo->query($sql);

// Skriver ut hvert prosjekt med knapper
while ($row = $stmt->fetch()) {
    echo "<div class='project'>";
    echo "<div class='project-header'>";
    echo "<h3>" . $row['name'] . "</h3>";
    echo "<a class='delete-button' href='delete_confirmation.php?project_id=" . $row['id'] . "'>X</a>";
    echo "</div>";
    echo "<a class='link_button' href='practice.php'>Practice</a>";
    echo "<a class='link_button' href='edit.php'>Edit</a>";
    echo "</div>";
}
?>


</div>

</div>
</body>
</html>
