@extends('layouts.admin')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>

    <div class="card-body">
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> {{ $user->role->name ?? '-' }}</p>
        <p><strong>Birthday:</strong> {{ $user->birthday ? $user->birthday->format('d/m/Y') : '-' }}</p>
        <p><strong>Created at:</strong> {{ $user->created_at->format('d/m/Y H:i') }}</p>
    </div>

    <div class="card-footer">
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
    </div>
</div>
