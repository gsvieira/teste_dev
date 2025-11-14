{{-- @extends('layouts.app')
<form method="POST" action="login">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit"> Login </button>
</form> --}}
@extends('layouts.admin')
<div class="d-flex justify-content-center align-items-center vh-100">
<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Acesse sua conta</p>
            <form method="POST" action="login">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" />
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" />
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Acesse sua conta</button>
                </div>
            </form>

            <p class="mb-0">
                <a href={{ route('register') }} class="text-center"> Cadastre-se </a>
            </p>
        </div>
    </div>
</div>
