@extends('backLayout.app')
@section('title')
Insumo
@stop

@section('content')

    <h1>Insumo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nome</th><th>Unidade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $insumo->id }}</td> <td> {{ $insumo->nome }} </td><td> {{ $insumo->unidade }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection