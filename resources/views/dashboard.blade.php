<h1>Bem vindo, {{ auth()->user()->name }} </h1>

<form method="POST" action="logout">
    @csrf
    <button type="submit"> Logout </button>
</form>