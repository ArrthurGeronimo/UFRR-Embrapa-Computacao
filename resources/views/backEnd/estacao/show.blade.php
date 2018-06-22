@extends('backLayout.app')
@section('title')
Estacao
@stop

@section('content')

    <h1>Estacao</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Talhao Id</th><th>Fazenda Id</th><th>Codigo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $estacao->id }}</td> <td> {{ $estacao->talhao_id }} </td><td> {{ $estacao->fazenda_id }} </td><td> {{ $estacao->codigo }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection