<?php
include  './../../../config.php';
session_start();
$logged = $_SESSION['loggeduser'] ?? null;
if (!$logged) {
	header('Location: /ASSAD/auth/login.php');
	exit();
}
$guideId = intval($logged['id_user']);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('Location: /ASSAD/Guide/Tours/tours.php');
	exit();
}

$titre = trim($_POST['titre'] ?? '');
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';
$langue = $_POST['language'] ?? ($_POST['langue'] ?? 'English');
$duree = intval($_POST['duree'] ?? 0);
$prix = floatval($_POST['prix'] ?? 0);
$capacite = intval($_POST['capacite_max'] ?? ($_POST['capacity'] ?? 0));

$dateheure = null;
if (!empty($date)) {
	$dateheure = $date . ' ' . ($time ?: '00:00:00');
}

if (empty($titre) || empty($dateheure)) {
	header('Location: /ASSAD/Guide/Tours/create-tour.php?error=missing');
	exit();
}

$sql = "INSERT INTO visitesguidees (titre, dateheure, langue, capacite_max, duree, prix, id_user, status) VALUES (?, ?, ?, ?, ?, ?, ?, 'ACTIVE')";
$stmt = $conn->prepare($sql);
if (!$stmt) {
	header('Location: /ASSAD/Guide/Tours/create-tour.php?error=dbprepare');
	exit();
}

$stmt->bind_param('sssiidi', $titre, $dateheure, $langue, $capacite, $duree, $prix, $guideId);

if (!$stmt->execute()) {
	header('Location: /ASSAD/Guide/Tours/create-tour.php?error=execute');
	exit();
}

$newId = $conn->insert_id;
header('Location: /ASSAD/Guide/steps/steps.php?visite_id=' . intval($newId));
exit();
