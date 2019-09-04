<html>
<head> 
<link rel="stylesheet" type="text/css" href="css/i.css">
<link rel="stylesheet" type="text/css" href="css/asearch.css">
</head>
<title> </title>

<body>
 <?php
$apiKey = "371191f2c341e0cd17618d002b3f035c";
$cityId = "1269750";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>
<div align="center"><H1>My Test Project<H1></div>
 <div class="report-container">
        <h6><?php echo $data->name; ?> Weather Status</h6>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
		
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
<?php
echo "<h1>City Search </h1>";
echo "</br>";
echo "<center>";
echo "<form action='asearch.php' method='GET'>
 <input type='text' name='name'><br>
<input type='submit' name='submit' value='submit'>
</form>";
echo "<h2> search For City Alpabatic </h2>";
//echo "<table>";
//echo "<tr>";
foreach (range('A','Z') as $alph){
	
echo "<td><a href='view.php?action=view&id=$alph'>$alph </a></td>";
}
//echo "</table>";
echo "</center>";
?>

</body>
</html>
