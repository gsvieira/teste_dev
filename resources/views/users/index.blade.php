@extends('layouts.admin')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Usuários</h3>

        <a href="{{ route('users.create') }}" class="btn btn-primary float-end">
            <i class="fas fa-plus"></i> Novo Usuário
        </a>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped">
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
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name ?? '-' }}</td>
                        <td>{{ $user->birthday ? $user->birthday->format('d/m/Y') : '-' }}</td>

                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i>
                                <span>Ver</span>
                            </a>

                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                                <span>Editar</span>
                            </a>

                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Excluir esse usuário?')" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                    <span>Excluir</span>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
