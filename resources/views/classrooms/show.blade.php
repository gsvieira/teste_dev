@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-primary">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Detalhes da matéria</h3>
                    <a href="{{ route('classrooms.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Voltar
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <td>{{ $classroom->id }}</td>
                        </tr>
                        <tr>
                            <th>Nome</th>
                            <td>{{ $classroom->name }}</td>
                        </tr>
                        <tr>
                            <th>Horário</th>
                            <td>{{ $classroom->schedule ? date('Y-m-d\TH:i', strtotime($classroom->schedule)) : '-' }}</td>
                        </tr>
                        <tr>
                            <th>Criação da Matéria:</th>
                            <td>{{ $classroom->created_at ? date('Y-m-d\TH:i', strtotime($classroom->created_at)) : '-' }}</td>
                        </tr>
                        <tr>
                            <th>Atualizado em:</th>
                            <td>{{ $classroom->updated_at ? date('Y-m-d\TH:i', strtotime($classroom->updated_at)) : '-' }}</td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
