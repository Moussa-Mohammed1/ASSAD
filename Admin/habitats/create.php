<?php
    include './../../config.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $typeclimat = isset($_POST['typeclimat']) ? $_POST['typeclimat'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $zonezoo = isset($_POST['zonezoo']) ? $_POST['zonezoo'] : '';

        if ($nom !== '' && $typeclimat !== '') {
            $stmt = $conn->prepare("INSERT INTO habitat (nom, typeclimat, `description`, zonezoo) VALUES (?, ?, ?, ?)");
            $stmt->bind_param('ssss', $nom, $typeclimat, $description, $zonezoo);
            $stmt->execute();
            $stmt->close();
        }
    }

    header('Location: habitats.php');
    exit;

?>
