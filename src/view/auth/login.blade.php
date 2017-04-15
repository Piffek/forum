<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<form method='POST' action="{{ route('login') }}">
    {{ csrf_field() }}
	<input name='email'>
	<input type='password' name='password'>
	<button type='submit'>Wyslij</button>
</form>
