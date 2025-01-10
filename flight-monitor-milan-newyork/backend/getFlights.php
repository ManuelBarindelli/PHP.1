<?php
// getFlights.php
$apiKey = "YOUR_API_KEY";  // Sostituisci con la tua chiave API
$fromCity = "Milan";
$toCity = "New York";

// Crea l'URL per la richiesta API
$url = "http://api.aviationstack.com/v1/flights?access_key=$apiKey&dep_iata=LIM&arr_iata=JFK";  // Puoi cambiare gli IATA codes se necessario

// Fai la richiesta GET all'API
$response = file_get_contents($url);

// Se la risposta è valida, ritorna i dati in formato JSON
if ($response !== FALSE) {
    echo $response;
} else {
    echo json_encode(["error" => "Unable to fetch flight data"]);
}
?>