@extends('backLayout.app')
@section('title')
Soloamostra
@stop

@section('content')

    <h1>Soloamostra</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Amostra Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $soloamostra->id }}</td> <td> {{ $soloamostra->piquete_id }} </td><td> {{ $soloamostra->amostra_id }} </td><td> {{ $soloamostra->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection