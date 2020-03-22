@extends('layouts.app')

@section('title-block')
Заказы
@endsection

@section('content')
	<h1>Заказы</h1>
	<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr class="info" >
				<th>ид_заказа</th>
				<th>название_партнера</th>
				<th>стоимость_заказа</th>
				<th>состав заказа</th>
				<th>статус_заказа</th>				
			</tr>
		</thead>
		<tbody>
		@foreach($data as $el)
			<tr>
				<td>{{$el->id}}</td>
				<td>{{$el->partner->name}}</td>
				<td>{{$el->products->sum('price')}}</td>
				<td>
					@foreach($el->products as $product)
					{{$product->name}}
					@endforeach
				</td>
				<td>
					@if ($el->status === 0)
						Новый
					@elseif ($el->status === 10)
						Подтвержден
					@elseif ($el->status === 20)
						Завершен
					@endif
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection