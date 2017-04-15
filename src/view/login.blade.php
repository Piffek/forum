<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<form method='POST' action='post/login'>
    {{ csrf_field() }}
	<input name='email'>
	<input name='password'>
	<button type='submit'>Wyslij</button>
</form>
@if(Auth::check())
	{{qweq}}
@endif