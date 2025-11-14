{{-- @extends('layouts.app')
<form method="POST" action="register">
    @csrf
    <input type="text" name="name" placeholder="nome">
    <input type="email" name="email" placeholder="mail">
    <input type="password" name="password" placeholder="Senha">
    <input type="password" name="password_confirmation" placeholder="Confirmar senha">
    <button type="submit"> Registrar</button>
</form> --}}

@extends('layouts.admin')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Cadastro</p>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nome" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Senha" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                    </div>
                </form>

                <p class="mt-3 mb-0 text-center">
                    <a href="{{ route('login') }}">Já tenho uma conta</a>
                </p>
            </div>
        </div>
    </div>
</div>
