@extends('layouts.app')

@section('title-block')
Заказы
@endsection

@section('content')
	<h1>Заказы</h1>
	<table class="table table-striped table-hover table-bordered table-sm">
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
				<td><a href="{{route('order-edit', $el->id)}}">{{$el->id}}</a></td>
				<td>{{$el->partner->name}}</td>
				<td>{{$el->products->sum('price')}}</td>
				<td>
					@foreach($el->products as $product)
					{{$product->name}}
					@endforeach
				</td>
					@if ($el->status === 0)
					<td class="warning">
						Новый
					</td>
					@elseif ($el->status === 10)
					<td class="info">
						Подтвержден
					</td>
					@elseif ($el->status === 20)
					<td class="success">
						Завершен
					</td>
					@endif
			</tr>
		@endforeach
		</tbody>
	</table>
	<ul class="pagination">
		<li class="page-item"><a class="page-link" href="{{route('orders', $page-1 <= 0 ? 0 : $page-1)}}">Предыдущая</a></li>
		<li class="page-item"><a class="page-link" href="{{route('orders', $page+1 >= $count ? $count : $page+1)}}">Следующая</a></li>
	</ul>
@endsection