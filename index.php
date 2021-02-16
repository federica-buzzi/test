<?php

require_once __DIR__ . '/vendor/autoload.php';

$data = Blok\Utils\Arr::csvToArray('https://docs.google.com/spreadsheets/d/e/2PACX-1vQ8Ggo8PUBJTujhMjsD0FjL2XIB6gtMfAsgGT5aiAGLqbOxIIUMwrzJHQOA2Rj4YTsujVAkpcuCw8qE/pub?gid=0&single=true&output=csv', [
    'length' => 0,
    'delimiter' => ',',
    'enclosure' => '"',
    'escape' => '\\',
    'skipFirstRow' => true,
    'indexFromFirstRow' => true
]);

//Kint::dump($data);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<table class="table table-stripped">
<?php
 foreach ($data as $item){
     echo "<tr><td>".$item['TEST']. '</td><td>'.$item['DAN'].'</td></tr>';
 }
?>
</table>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>