@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <h1>Talhões da Fazenda {{$fazenda->nome}}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Fazenda Id</th><th>Nome</th><th>Area</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fazenda->talhoes as $talhao)
                <tr>
                    <td>{{ $talhao->id }}</td> 
                    <td> {{ $talhao->fazenda_id }} </td>
                    <td> {{ $talhao->nome }} </td>
                    <td> {{ $talhao->area }} </td>
                    <td>
                        <a href="{{ url('talhao/' . $talhao->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['talhao', $talhao->id],
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

    <a href="{{ url('fazenda/'.$fazenda->id.'/talhoes/create' )  }}"><button type="button" class="btn btn-primary btn-lg">Criar Talhão</button></a>

@endsection