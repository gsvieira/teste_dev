<form method="POST" action="register">
    @csrf
    <input type="text" name="name" placeholder="nome">
    <input type="email" name="email" placeholder="mail">
    <input type="password" name="password" placeholder="Senha">
    <input type="password" name="password_confirmation" placeholder="Confirmar senha">
    <button type="submit"> Registrar</button>
</form>