<?php
// add_flight.php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $flightNumber = $_POST['flight_number'];
    $airline = $_POST['airline'];
    $departureTime = $_POST['departure_time'];
    $arrivalTime = $_POST['arrival_time'];

    $stmt = $pdo->prepare("INSERT INTO flights (flight_number, airline, departure_time, arrival_time) VALUES (?, ?, ?, ?)");
    $stmt->execute([$flightNumber, $airline, $departureTime, $arrivalTime]);

    echo json_encode(['message' => 'Flight added successfully']);
}
?>