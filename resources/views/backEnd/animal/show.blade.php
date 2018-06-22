@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <h1>Animais da Fazenda {{$fazenda->nome}}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Fazenda Id</th><th>Numero Fazenda</th><th>Pai</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fazenda->animais as $animal)
                <tr>
                    <td>{{ $animal->id }}</td> 
                    <td> {{ $animal->fazenda_id }} </td>
                    <td> {{ $animal->numero_fazenda }} </td>
                    <td> {{ $animal->pai }} </td>
                    <td>
                        <a href="{{ url('animal/' . $animal->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['animal', $animal->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>    
        </table>
    </div>

    <a href="{{ url('fazenda/'.$fazenda->id.'/animais/create' )  }}"><button type="button" class="btn btn-primary btn-lg">Criar Animal</button></a>

@endsection