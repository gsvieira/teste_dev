@php
    $isEdit = isset($classroom);
@endphp

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $isEdit ? 'Edit Classroom' : 'Create Classroom' }}</h3>
    </div>

    <form action="{{ $isEdit ? route('classrooms.update', $classroom->id) : route('classrooms.store') }}" method="POST">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div class="card-body">

            <div class="form-group">
                <label for="name">Nome da Disciplina</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ old('name', $isEdit ? $classroom->name : '') }}" required>
            </div>

            <div class="form-group">
                <label for="schedule">Horário</label>
                <input type="datetime-local" name="schedule" id="schedule" class="form-control"
                    value="{{ old('schedule', $isEdit && $classroom->schedule ? date('Y-m-d\TH:i', strtotime($classroom->schedule)) : '') }}">
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> {{ $isEdit ? 'Update' : 'Save' }}
            </button>
            <a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
