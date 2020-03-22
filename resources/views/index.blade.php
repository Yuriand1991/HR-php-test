@extends('layouts.app')

@section('title-block')
Погода
@endsection

@section('content')
<div class="container">
	<h1>Погода в Брянске</h1>
	<div class="alert alert-info">
		<p>Сегодня: {{$today}}</p>
		<p>Обновлено: {{$time}}</p>
		<p>Температура: {{$temp}} &deg;C</p>
		<p>Влажность: {{$humidity}}  %</p>
		<p>Ветер: {{$speed}} м/с</p>
		<p>Давление: {{$pressure}} мм р/с</p>
		<img src='https://yastatic.net/weather/i/icons/blueye/color/svg/{{$icon}}' width='50'>
	</div>
</div>
@endsection