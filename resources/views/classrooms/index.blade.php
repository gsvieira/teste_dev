@extends('layouts.admin')

@section('title', 'Classrooms')

@section('content_header')
    <h1>Disciplinas</h1>
@stop

@section('content')
<a href="{{ route('classrooms.create') }}" class="btn btn-success mb-3">
    <i class="fas fa-plus"></i> Criar Disciplina
</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classrooms as $classroom)
        <tr>
            <td>{{ $classroom->id }}</td>
            <td>{{ $classroom->name }}</td>
            <td>
                <a href="{{ route('classrooms.edit', $classroom->id) }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
