<?php

$weather_data = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Moscow&appid=4b4c6388094b33baacb43cb677b27c64');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Четвертое задание</title>
</head>
<body>

<?php $weather_forecast_list = json_decode($weather_data); ?>
<h1>City: <?php print $weather_forecast_list->{'name'}; ?></h1>
<dt>Temperature:</dt><dd><?php echo (($weather_forecast_list->main->temp)-273); ?>˚C</dd>
<dt>Pressure:</dt><dd><?php echo $weather_forecast_list->main->pressure; ?> hPa</dd>
<dt>Humidity:</dt><dd><?php echo $weather_forecast_list->main->humidity; ?>%</dd>
<dt>Wind speed:</dt><dd><?php echo $weather_forecast_list->wind->speed; ?> m/s</dd>

</body>
</html>