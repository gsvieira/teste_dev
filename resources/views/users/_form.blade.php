@php
    $isEdit = isset($user);
@endphp

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            {{ $isEdit ? 'Edit User' : 'Create User' }}
        </h3>
    </div>

    <form action="{{ $isEdit ? route('users.update', $user->id) : route('users.store') }}" method="POST">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div class="card-body">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"
                       class="form-control"
                       id="name"
                       name="name"
                       value="{{ old('name', $isEdit ? $user->name : '') }}"
                       required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"
                       class="form-control"
                       id="email"
                       name="email"
                       value="{{ old('email', $isEdit ? $user->email : '') }}"
                       required>
            </div>

            <div class="form-group">
                <label for="birthday">Birthday</label>

                <input type="date"
                       name="birthday"
                       id="birthday"
                       class="form-control"
                       value="{{ old('birthday',
                            $isEdit && $user->birthday
                            ? $user->birthday->format('Y-m-d')
                            : ''
                       ) }}">
            </div>

            <div class="form-group">
                <label for="role_id">Role</label>

                <select name="role_id" id="role_id" class="form-control">
                    <option value="">Selecione...</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}"
                            {{ old('role_id', $isEdit ? $user->role_id : '') == $role->id ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="password">
                    Senha
                    @if($isEdit)
                        <small>(deixe em branco para não modificar)</small>
                    @endif
                </label>

                <input type="password"
                       class="form-control"
                       id="password"
                       name="password"
                       @if(!$isEdit) required @endif>
            </div>
            <div class="form-group">
                <label for="password">
                    Confirma Senha 
                    @if($isEdit)
                        <small>(deixe em branco para não modificar)</small>
                    @endif
                </label>

                <input type="password"
                       class="form-control"
                       id="password_confirmation"
                       name="password_confirmation"
                       @if(!$isEdit) required @endif>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> {{ $isEdit ? 'Update' : 'Save' }}
            </button>

            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
