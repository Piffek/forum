<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<form method='POST' action="{{ route('addSubject') }}">
    {{ csrf_field() }}
	<input type="text" name='subject'>
	<input type="text" name='body'>
	<button type='submit'>Dodaj</button>
</form>
