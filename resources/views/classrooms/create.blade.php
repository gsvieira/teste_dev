{{-- @extends('layouts.admin')

@section('title', 'Create Classroom')

@section('content_header')
<h1>Criar Disciplina</h1>
@stop

@section('content')
<form action="{{ route('classrooms.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nome da Disciplina</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="schedule">Horário:</label>
        <input type="datetime-local" name="schedule" id="schedule" class="form-control"
            value="{{ old('schedule', isset($classroom) ? $classroom->schedule->format('Y-m-d\TH:i') : '') }}"
        >
    </div>
    <button type="submit" class="btn btn-success mt-2">
        <i class="fas fa-plus"></i> Save
    </button>
    <a href="{{ route('classrooms.index') }}" class="btn btn-secondary mt-2">Cancel</a>
</form>
@stop
 --}}


@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card-body">
                @include('classrooms._form')
            </div>

        </div>
    </div>
</div>
@endsection
