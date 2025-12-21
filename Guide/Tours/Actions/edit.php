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

$titre = trim($_POST['titre'] ?? '');
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';
$langue = $_POST['language'] ?? ($_POST['langue'] ?? 'English');
$duree = intval($_POST['duree'] ?? 0);
$prix = floatval($_POST['prix'] ?? 0);
$capacite = intval($_POST['capacite_max'] ?? ($_POST['capacity'] ?? 0));

$dateheure = null;
if (!empty($date)) $dateheure = $date . ' ' . ($time ?: '00:00:00');

$sql = 'UPDATE visitesguidees SET titre = ?, dateheure = ?, langue = ?, capacite_max = ?, duree = ?, prix = ? WHERE id_visite = ? AND id_user = ?';
$stmt = $conn->prepare($sql);
if (!$stmt) { header('Location: /ASSAD/Guide/Tours/edit-tour.php?id=' . $id . '&error=db'); exit(); }
 $stmt->bind_param('sssiidii', $titre, $dateheure, $langue, $capacite, $duree, $prix, $id, $guideId);
$stmt->execute();

header('Location: /ASSAD/Guide/Tours/tours.php?updated=1');
exit();

