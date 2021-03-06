@extends('backLayout.app')
@section('title')
Edit Animaldado
@stop

@section('content')

    <h1>Edit Animaldado</h1>
    <hr/>

    {!! Form::model($animaldado, [
        'method' => 'PATCH',
        'url' => ['animaldado', $animaldado->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('animal_id') ? 'has-error' : ''}}">
                {!! Form::label('animal_id', 'Animal Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('animal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('animal_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('amostra_id') ? 'has-error' : ''}}">
                {!! Form::label('amostra_id', 'Amostra Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('amostra_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('amostra_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
                {!! Form::label('data', 'Data: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('data', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nome_dado') ? 'has-error' : ''}}">
                {!! Form::label('nome_dado', 'Nome Dado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nome_dado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nome_dado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('unidade') ? 'has-error' : ''}}">
                {!! Form::label('unidade', 'Unidade: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('unidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('unidade', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('peso') ? 'has-error' : ''}}">
                {!! Form::label('peso', 'Peso: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('peso', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('peso', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection