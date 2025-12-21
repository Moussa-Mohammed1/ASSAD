<?php
include './../../../config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../steps.php');
    exit();
}

$logged = $_SESSION['loggeduser'] ?? null;
if (!$logged) { header('Location: /ASSAD/auth/login.php'); exit(); }

$visite_id = intval($_POST['visite_id'] ?? 0);
$titre = trim($_POST['titre'] ?? '');
$description = trim($_POST['description'] ?? '');
$duree = intval($_POST['duree'] ?? 0);

if ($visite_id <= 0 || empty($titre)) {
    header("Location: ../steps.php?visite_id=$visite_id&error=empty_fields");
    exit();
}

$guideId = intval($logged['id_user']);
$stmt = $conn->prepare("SELECT id_user FROM visitesguidees WHERE id_visite = ?");
$stmt->bind_param("i", $visite_id);
$stmt->execute();
$res = $stmt->get_result()->fetch_assoc();


$stmt = $conn->prepare("SELECT COALESCE(MAX(ordreetape), 0) + 1 AS next_order FROM etapesvisite WHERE id_visite = ?");
$stmt->bind_param("i", $visite_id);
$stmt->execute();
$nextOrder = $stmt->get_result()->fetch_assoc()['next_order'];

$insert = $conn->prepare("INSERT INTO etapesvisite (titreetape, descriptionetape, duree_minutes, ordreetape, id_visite) VALUES (?, ?, ?, ?, ?)");
$insert->bind_param("ssiii", $titre, $description, $duree, $nextOrder, $visite_id);

if ($insert->execute()) {
    header("Location: ../steps.php?visite_id=$visite_id&success=added");
} else {
    header("Location: ../steps.php?visite_id=$visite_id&error=db_error");
}
exit();