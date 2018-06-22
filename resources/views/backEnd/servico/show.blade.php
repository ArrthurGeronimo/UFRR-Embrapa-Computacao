@extends('backLayout.app')
@section('title')
Servico
@stop

@section('content')

    <h1>Servico</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nome</th><th>Unidade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $servico->id }}</td> <td> {{ $servico->nome }} </td><td> {{ $servico->unidade }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection