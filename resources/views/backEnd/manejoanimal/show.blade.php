@extends('backLayout.app')
@section('title')
Manejoanimal
@stop

@section('content')

    <h1>Manejoanimal</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Animal Id</th><th>Nome</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $manejoanimal->id }}</td> <td> {{ $manejoanimal->animal_id }} </td><td> {{ $manejoanimal->nome }} </td><td> {{ $manejoanimal->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection