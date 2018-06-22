@extends('backLayout.app')
@section('title')
Praga
@stop

@section('content')

    <h1>Praga</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Amostra Id</th><th>Tipo</th><th>Especie</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $praga->id }}</td> <td> {{ $praga->amostra_id }} </td><td> {{ $praga->tipo }} </td><td> {{ $praga->especie }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection