<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>@yield('title')</title>
	<!--    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">	-->
	
	    <style type="text/css">
	    	html, body {
	    		background-color: #fff;
	    		height: 100vh;
	    		margin: 0;
	    		padding: 0;
	    		font-family: 'Trebuchet MS', 'MS Sans Serif', sans-serif;
	    		color: black;

	    	}
	    	.main-div {
	    		display: flex;
	    		margin: 20px 0;
	    		justify-content: center;
	    	}
	    	.main-div table {
	    		border-collapse: collapse;
	    	}
	    	.main-div table, .main-div th, .main-div td {
	    		border: 1px solid black;
	    		padding: 10px;
	    	}
	    	.main-div th {
	    		background-color: #1773c8;
	    	}
	    	.main-div tr:nth-child(even) {
	    		background-color: #ced6eb;
	    	}
	    	.main-div tr:nth-child(odd) {
	    		background-color: #e9ebf7;
	    	}
	    	.main-div form {
	    		width: 500px;
	    		border: 1px solid black;
	    		padding: 10px;
	    		background-color: silver;
	    	}
	    	.main-div form>label {
	    		display: block;
	    		width: 35%;
	    		float: left;
	    		margin-bottom: 5px;
	    		margin-right: 10px;
	    	}
	    	.main-div form>input {
	    		display: inline-block;
	    		width: 60%;
	    		float: left;
	    		margin-bottom: 5px;
	    	}
	    	.main-div form>#btn {
	    		margin: 5px 0 0 0;
	    		width: 100%;
	    	}
	    </style>
	</head>
	<body>
		<div class="main-div">@yield('content')</div>
	</body>
</html>