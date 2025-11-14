@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Detalhes do curso</h3>
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Voltar
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <td>{{ $course->id }}</td>
                        </tr>
                        <tr>
                            <th>Nome</th>
                            <td>{{ $course->name }}</td>
                        </tr>
                        <tr>
                            <th>Descrição</th>
                            <td>{{ $course->description ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Criada em:</th>
                            <td>{{ $course->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th>Data de atualização</th>
                            <td>{{ $course->updated_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
