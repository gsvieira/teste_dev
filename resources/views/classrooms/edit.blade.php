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
