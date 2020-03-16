@extends('layouts.app')

@section('title', 'Order table')

@section('content')
	<table border = "1">
		<thead>
			<tr>
				<th>ид_заказа</th>
				<th>название_партнера</th>
				<th>стоимость_заказа</th>
				<th>статус_заказа</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($query as $order)
				<tr>
					<td>{{ $order->id }}</td>
					<td>{{ $order->name }}</td>
					<td>{{ $order->price }}</td>
					<td>{{ $order->status }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection