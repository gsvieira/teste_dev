@extends('layouts.admin')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Usuários</h3>

        <a href="{{ route('users.create') }}" class="btn btn-primary float-end">
            <i class="fas fa-plus"></i> Novo Usuário
        </a>
    </div>

    <div class="mb-3">
        <input type="text" id="user-search" class="form-control" placeholder="Buscar por nome, email ou matéria">
    </div>

    <div class="card-body p-0">
        <table class="table table-striped" id="users-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Função</th>
                    <th>Aniversário</th>
                    <th style="width: 240px;">Ações</th>
                </tr>
            </thead>

            <tbody>
                @include('users.partials.users_table', ['users' => $users])
            </tbody>
        </table>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#user-search').on('keyup', function() {
        let query = $(this).val();

        $.ajax({
            url: "{{ route('users.index') }}",
            type: "GET",
            data: { search: query },
            success: function(data) {
                console.log(data);
                $('#users-table tbody').html(data);
            }
        });
    });
});
</script>

