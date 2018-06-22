@extends('backLayout.app')
@section('title')
Amostra
@stop

@section('content')

    <h1>Amostra</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Numero Amostra</th><th>Bloco</th><th>Tratamento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $amostra->id }}</td> <td> {{ $amostra->numero_amostra }} </td><td> {{ $amostra->bloco }} </td><td> {{ $amostra->tratamento }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection