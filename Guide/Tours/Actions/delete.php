<?php
include  './../../../config.php';
session_start();
$logged = $_SESSION['loggeduser'] ?? null;
if (!$logged) { header('Location: /ASSAD/auth/login.php'); exit(); }
$guideId = intval($logged['id_user']);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /ASSAD/Guide/Tours/tours.php');
    exit();
}

$id = intval($_POST['id_visite'] ?? 0);
if ($id <= 0) { header('Location: /ASSAD/Guide/Tours/tours.php'); exit(); }

$stmt = $conn->prepare('SELECT id_user FROM visitesguidees WHERE id_visite = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$owner = $stmt->get_result()->fetch_assoc()['id_user'] ?? 0;
if ($owner != $guideId) { header('Location: /ASSAD/Guide/Tours/tours.php?error=forbidden'); exit(); }

$stmt = $conn->prepare('DELETE FROM visitesguidees WHERE id_visite = ? AND id_user = ?');
$stmt->bind_param('ii', $id, $guideId);
$stmt->execute();

header('Location: /ASSAD/Guide/Tours/tours.php?deleted=1');
exit();
