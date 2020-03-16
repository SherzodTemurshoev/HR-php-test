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
	<p><label>email_клиента</label><input type="text" name="email"></p>
	<p><label>партнер</label><input type="text" name="name_partner"></p>
<!--	<p><label>продукты</label><input type="text" name="name_product"></p>	-->
	<p><label>статус заказ</label><input type="text" name="status"></p>
	<p><label>стоимость заказа</label><input type="number" name="price"></p>
	<p><input type="submit" name="done" value="сохранение изменений в заказе"></p>
</form>