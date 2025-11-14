@extends('layouts.admin')

@section('title', 'Cursos do Usuário')

@section('content_header')
    <h1>Gerenciar Cursos de {{ $user->name }}</h1>
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Selecionar Cursos</h3>
    </div>

    <form action="{{ route('users.courses.update', $user->id) }}" method="POST">
        @csrf

        <div class="card-body">

            <div class="form-group">
                <label>Cursos</label>
                <select class="form-control" name="courses[]" multiple>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}"
                            {{ $user->courses->contains($course->id) ? 'selected' : '' }}>
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="card-footer">
            <button class="btn btn-success">
                <i class="fas fa-save"></i> Salvar
            </button>

            <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary">
                Voltar
            </a>
        </div>
    </form>
</div>
@stop
