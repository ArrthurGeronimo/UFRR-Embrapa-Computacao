@extends('backLayout.app')
@section('title')
Plantiocultura
@stop

@section('content')

    <h1>Plantiocultura</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Amostra Id</th><th>Data Amostra</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $plantiocultura->id }}</td> <td> {{ $plantiocultura->piquete_id }} </td><td> {{ $plantiocultura->amostra_id }} </td><td> {{ $plantiocultura->data_amostra }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection