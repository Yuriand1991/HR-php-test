@section('header')	
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="{{route('home')}}">HR test</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li {{ (Request::is('/') ? 'class=active' : '') }}><a href="{{route('home')}}" >Погода</a></li>
				<li {{ (Request::is('orders/*') ? 'class=active' : '') }}><a href="{{route('orders', 0)}}" >Заказы</a></li>
			</ul>
		</div>
	</div>
</nav>