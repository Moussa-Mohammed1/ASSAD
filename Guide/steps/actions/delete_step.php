<?php
include './../../../config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../steps.php');
    exit();
}

$logged = $_SESSION['loggeduser'] ?? null;
if (!$logged) { header('Location: /ASSAD/auth/login.php'); exit(); }
$guideId = intval($logged['id_user']);

$step_id = intval($_POST['step_id'] ?? 0);
$visite_id = intval($_POST['visite_id'] ?? 0); // Passed for redirection

if ($step_id <= 0) {
    header("Location: ../steps.php?visite_id=$visite_id&error=invalid_id");
    exit();
}

$check = $conn->prepare("
    SELECT e.id_etape 
    FROM etapesvisite e
    JOIN visitesguidees v ON e.id_visite = v.id_visite
    WHERE e.id_etape = ? AND v.id_user = ?
");
$check->bind_param("ii", $step_id, $guideId);
$check->execute();
if ($check->get_result()->num_rows === 0) {
    die("Forbidden: You do not own this tour.");
}

$del = $conn->prepare("DELETE FROM etapesvisite WHERE id_etape = ?");
$del->bind_param("i", $step_id);
$del->execute();

header("Location: ../steps.php?visite_id=$visite_id&deleted=1");
exit();