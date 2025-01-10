# Flight Monitor

Sistema backend in PHP e MySQL per monitorare i voli tra Milano e New York.

## Configurazione
1. Crea un database MySQL usando lo script `flights.sql`.
2. Configura le credenziali del database nel file `db.php`.
3. Avvia un server PHP locale o carica il codice su un server.

## Endpoint API
- **Aggiungi volo:** `POST /add_flight.php`
- **Recupera voli:** `GET /get_flights.php`
- **Aggiorna stato del volo:** `POST /update_flight_status.php`

## Tecnologie
- PHP
- MySQL# PHP.1