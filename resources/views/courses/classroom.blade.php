@extends('adminlte::page')

@section('title', 'Gerenciar Salas')

@section('content_header')
    <h1>Vincular Salas ao Curso: {{ $course->name }}</h1>
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Selecionar Salas</h3>
    </div>

    <form action="{{ route('courses.classrooms.update', $course->id) }}" method="POST">
        @csrf

        <div class="card-body">

            <div class="form-group">
                <label>Salas</label>
                <select name="classrooms[]" class="form-control" multiple>
                    @foreach($classrooms as $classroom)
                        <option value="{{ $classroom->id }}"
                            {{ $course->classrooms->contains($classroom->id) ? 'selected' : '' }}>
                            {{ $classroom->name }} - {{ $classroom->schedule }}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="card-footer">
            <button class="btn btn-success">Salvar</button>
            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</div>
@stop
