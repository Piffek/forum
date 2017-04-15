<form method='POST' action="{{ route('register') }}">
    {{ csrf_field() }}
    <input name='name'>
	<input name='email'>
	<input type='password' name='password'>
	<button type='submit'>Rejestruj</button>
</form>