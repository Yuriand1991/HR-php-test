@extends('layouts.app')

@section('title-block')
Заказы
@endsection

@section('content')
	<h1>Редактирование заказа</h1>
	<form action="{{route('order-update', $order->id)}}" method="post">
		{{ csrf_field() }}
			
		<div class="form-group">
			<label for="email">E-mail клиента</label>
			<input type="text" name="email" id="email" class="form-control" value="{{$order->client_email}}">
			<p class="help-block">Обязательно для заполнения</p>
		</div>
			
		<div class="form-group">
			<label for="partner">Партнер</label>
			<select  name="partner" id="partner" class="form-control">
			@foreach($partners as $partner)
				<option value = "{{$partner->id}}" {{$partner->id === $order->partner_id ? 'selected' : ''}}>{{$partner->name}}</option>
			@endforeach
			</select>
			<p class="help-block">Обязательно для заполнения</p>
		</div>
			
		<div class="form-group">
			<label for="price">Продукты</label>
			<div name="price" id="price" class="alert alert-info">
				@foreach($order->products as $product)
					<p>{{$product->name}}</p>
				@endforeach
			</div>
		</div>
			
		<div class="form-group">
			<label for="status">Статус</label><br>
			<select name="status" id="status">
				<option value = "0" {{$order->status === 0 ? 'selected' : ''}}>Новый</option>
				<option value = "10" {{$order->status === 10 ? 'selected' : ''}}>Подтвержден</option>
				<option value = "20" {{$order->status === 20 ? 'selected' : ''}}>Завершен</option>
			</select>
			<p class="help-block">Обязательно для заполнения</p>
		</div>
			
		<div class="form-group">
			<label for="price">Стоимость заказа</label>
			<p name="price" id="price">{{$order->products->sum('price')}} руб.</p>
		</div>
		<button type="submit" class="btn btn-success">Сохранить</button>
	</form>
@endsection