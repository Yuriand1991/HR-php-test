<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title-block')</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.header')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>
</body>
</html>