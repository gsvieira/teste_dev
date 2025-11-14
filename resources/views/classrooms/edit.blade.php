{{-- @extends('layouts.admin')

@section('title', 'Edit Classroom')

@section('content_header')
<h1>Edit Classroom</h1>
@stop

@section('content')
<form action="{{ route('classrooms.update', $classroom) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Classroom Name</label>
        <input type="text" name="name" id="name" value="{{ $classroom->name }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">
        <i class="fas fa-save"></i> Update
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
