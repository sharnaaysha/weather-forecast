@extends('layouts/app')
@section('resultContent')
<!doctype html>
<html>
<head>
<title>Forecast Weather using OpenWeatherMap with PHP</title>
</head>
<body>
    <div class="report-container result">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo "max" . " ". $data->main->temp_max; ?>°C<span
                class="min-temperature"><?php echo " ". "min". " ".$data->main->temp_min; ?>°C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-primary previous">Back</a>
    </div>
</body>
@endsection