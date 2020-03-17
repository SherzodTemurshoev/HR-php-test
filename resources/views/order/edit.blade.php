@extends('layouts.app')

@section('title', 'Редактирование заказа')

@section('content')
	@if($errors->any())
		<div>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{ route('orders.update', $order->id) }}" method="get">
		<label>email_клиента</label><input type="text" name="email">
		<label>партнер</label><input type="text" name="name_partner">
	<!--	<p><label>продукты</label><input type="text" name="name_product"></p>	-->
		<label>статус заказ</label><input type="text" name="status">
		<label>стоимость заказа</label><input type="number" name="price"><br>
		<input type="submit" name="done" value="Сохранить" id="btn">
	</form>
@endsection