@extends('backLayout.app')
@section('title')
Cultura
@stop

@section('content')

    <h1>Cultura</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Especie</th><th>Material</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cultura->id }}</td> <td> {{ $cultura->especie }} </td><td> {{ $cultura->material }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection