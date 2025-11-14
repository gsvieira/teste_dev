@extends('adminlte::page')

@section('title', 'Gerenciar Estudantes')

@section('content_header')
    <h1>Inscrever Estudantes no Curso: {{ $course->name }}</h1>
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Selecionar Estudantes</h3>
    </div>

    <form action="{{ route('courses.students.update', $course->id) }}" method="POST">
        @csrf

        <div class="card-body">

            <div class="form-group">
                <label>Estudantes</label>
                <select name="students[]" class="form-control" multiple>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}"
                            {{ $course->students->contains($student->id) ? 'selected' : '' }}>
                            {{ $student->name }} ({{ $student->email }})
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
