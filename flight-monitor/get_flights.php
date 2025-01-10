<?php
// get_flights.php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM flights WHERE departure_time >= NOW()");
$flights = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($flights);
?>