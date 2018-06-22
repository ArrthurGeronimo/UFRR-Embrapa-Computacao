@extends('backLayout.app')
@section('title')
Animaldado
@stop

@section('content')

    <h1>Animaldado</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Animal Id</th><th>Amostra Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $animaldado->id }}</td> <td> {{ $animaldado->animal_id }} </td><td> {{ $animaldado->amostra_id }} </td><td> {{ $animaldado->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection