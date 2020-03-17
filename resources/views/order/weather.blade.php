@extends('layouts.app')

@section('title', 'Order table')

@section('content')
	<table>
		<thead>
			<tr>
				<th>Город</th>
				<th>Ветер</th>
				<th>Облачность</th>
				<th>Географические координаты</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ $data['name'] }}</td>
				<td>{{ $data['wind']['speed'] }} м/с</td>
				<td>{{ $data['weather'][0]['description'] }}</td>
				<td>[ {{ $data['coord']['lat'] }} : {{ $data['coord']['lon'] }} ] </td>
			</tr>
		</tbody>
	</table>
@endsection
