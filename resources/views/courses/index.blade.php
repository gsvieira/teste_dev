@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Courses</h3>
                    <a href="{{ route('courses.create') }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Create Course
                    </a>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>
                                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>

                                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            @if($courses->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center">No courses found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
