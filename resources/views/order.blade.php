@extends('layouts.app')

@section('title-block')
Заказы
@endsection

@section('content')
	<div class="container">
		<h1>Редактирование заказа</h1>
		<form action="{{route('order-form')}}" method="post">
			{{ csrf_field() }}
			
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="partner">Партнер</label>
				<input type="text" name="partner" id="partner" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="status">Статус заказа</label>
				<input type="text" name="status" id="status" class="form-control">
			</div>
			
			<button type="submit" class="btn btn-success">Сохранить</button>
		</form>
	</div>
@endsection