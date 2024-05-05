<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Confirmation</title>
    <link rel="stylesheet" href="css/confirmation.css">
</head>
<body>
<?php
// Henter prosjekt-ID fra URL-parameteren
if (isset($_GET['project_id'])) {
    $project_id = $_GET['project_id'];
} else {
    // Hvis prosjekt-ID ikke er tilgjengelig, omdiriger tilbake til prosjektsiden
    header("Location: projects.php");
    exit();
}

// Resten av koden for bekreftelsessiden...
?>

    <div class="container">
        <h1>Delete Confirmation</h1>
        <p>Are you sure you want to delete this project?</p>
        <form action="deleteProject.php" method="post">
    <input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
    <button type="submit" name="confirm" value="yes">Yes</button>
    <button type="submit" name="confirm" value="no">No</button>
</form>

    </div>
</body>
</html>
