<?php

// Back-end

require_once __DIR__ . '/vendor/autoload.php';

$data = Blok\Utils\Arr::csvToArray('https://docs.google.com/spreadsheets/d/e/2PACX-1vQ8Ggo8PUBJTujhMjsD0FjL2XIB6gtMfAsgGT5aiAGLqbOxIIUMwrzJHQOA2Rj4YTsujVAkpcuCw8qE/pub?gid=0&single=true&output=csv', [
    'length' => 0,
    'delimiter' => ',',
    'enclosure' => '"',
    'escape' => '\\',
    'skipFirstRow' => true,
    'indexFromFirstRow' => true
]);

/**
 * @see : https://github.com/kint-php/kint
 */
//Kint::dump($data);
?>
<!-- FRONT-END -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
</head>
<body>
<table class="table table-stripped">
<?php
 foreach ($data as $item){
     echo "<tr><td>".$item['TEST']. '</td><td>'.$item['DAN'].'</td></tr>';
 }
?>
</table>

<br><br>

<canvas id="myChart"></canvas>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
<script>

  var ctx = document.getElementById('myChart').getContext('2d');

  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45]
      }]
    },

    // Configuration options go here
    options: {}
  });
</script>
</body>
</html>