// index.js (Node.js/Express)
const express = require('express');
const axios = require('axios');
const app = express();
const port = 3000;

// Serve il frontend
app.get('/', (req, res) => {
  res.send(`
    <h1>Monitoraggio Voli: Milano - New York</h1>
    <div id="flights"></div>
    <script>
      fetch('/flights')
        .then(response => response.json())
        .then(data => {
          const flightsDiv = document.getElementById('flights');
          if (data.error) {
            flightsDiv.innerHTML = '<p>Errore nel recupero dei dati</p>';
          } else {
            let flightList = '<ul>';
            data.forEach(flight => {
              flightList += '<li>' + flight.flight.iata + ' - ' + flight.departure.airport + ' to ' + flight.arrival.airport + '</li>';
            });
            flightList += '</ul>';
            flightsDiv.innerHTML = flightList;
          }
        });
    </script>
  `);
});

// Richiedi i dati del volo dal backend PHP
app.get('/flights', (req, res) => {
  axios.get('http://localhost:8080/getFlights.php')
    .then(response => {
      res.json(response.data);
    })
    .catch(error => {
      res.status(500).json({ error: 'Errore nel recupero dei dati dai voli' });
    });
});

// Avvia il server sulla porta 3000
app.listen(port, () => {
  console.log(`Server ascolta sulla porta ${port}`);
});
