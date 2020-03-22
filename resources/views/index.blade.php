@extends('layouts.app')

@section('title-block')
Погода
@endsection

@section('content')
<h1>Погода</h1>
@endsection

<?php
		header("Access-Control-Allow-Origin: *");
		setlocale(LC_ALL, "ru_RU");
		date_default_timezone_set("Europe/Moscow");

		$opts = array(
		  'http' => array(
			'method' => "GET",
			'header' => "X-Yandex-API-Key: 7f90cf45-88f8-4aeb-b38a-3c91ed9a0128"
		  )
		);

		$url = "https://api.weather.yandex.ru/v1/forecast?lat=52.886894&lon=40.509112&limit=1&hours=false&extra=false";
		$context = stream_context_create($opts);
		$contents = file_get_contents($url, false, $context);
		$clima = json_decode($contents);

		$time_unix = $clima->fact->obs_time;
		$temp = $clima->fact->temp;
		$humidity = $clima->fact->humidity;
		$speed = $clima->fact->wind_speed;
		$pressure = $clima->fact->pressure_mm;
		$icon = $clima->fact->icon . ".svg";

		$today = date("j/m/Y, H:i");
		$time = date("j/m/Y, H:i", $time_unix);

		echo "Дата/Вреемя:" . " - " . $today . "<br>";
		echo "Обновлено:" . " - " . $time . "<br>";
		echo "Температура: " . $temp . " &deg;C<br>";
		echo "Влажность: " . $humidity . " %<br>";
		echo "Ветер: " . $speed . " м/с<br>";
		echo "Давление: " . $pressure . " мм р/с<br>";
		echo "<img src='https://yastatic.net/weather/i/icons/blueye/color/svg/" . $icon . "'/ width='50'>";