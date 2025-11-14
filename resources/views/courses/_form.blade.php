@php
    $isEdit = isset($course);
@endphp

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $isEdit ? 'Edit Course' : 'Create Course' }}</h3>
    </div>

    <form action="{{ $isEdit ? route('courses.update', $course->id) : route('courses.store') }}" method="POST">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div class="card-body">
            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ old('name', $isEdit ? $course->name : '') }}" required>
            </div
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $isEdit ? $course->description : '') }}</textarea>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> {{ $isEdit ? 'Update' : 'Save' }}
            </button>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
