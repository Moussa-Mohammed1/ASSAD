<?php
include "./../../config.php";
session_start();
$logged = $_SESSION['loggeduser'] ?? null;
if (!$logged) {
	header('Location: ./../../auth/login.php');
	exit();
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id > 0) {
	$stmt = $conn->prepare("DELETE FROM animal WHERE id_animal = ?");
	if ($stmt) {
		$stmt->bind_param('i', $id);
		$stmt->execute();
		$stmt->close();
	}
}

header('Location: ./animals.php');
exit();

?>

