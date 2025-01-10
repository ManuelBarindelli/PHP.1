<?php
// update_flight_status.php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $flightId = $_POST['id'];
    $status = $_POST['status'];

    $stmt = $pdo->prepare("UPDATE flights SET status = ? WHERE id = ?");
    $stmt->execute([$status, $flightId]);

    echo json_encode(['message' => 'Flight status updated successfully']);
}
?>