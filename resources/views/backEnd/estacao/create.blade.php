@extends('backLayout.app')
@section('title')
Create new Estacao
@stop

@section('content')

    <h1>Create New Estacao</h1>
    <hr/>

    {!! Form::open(['url' => 'estacao', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('talhao_id') ? 'has-error' : ''}}">
                {!! Form::label('talhao_id', 'Talhao Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('talhao_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('talhao_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fazenda_id') ? 'has-error' : ''}}">
                {!! Form::label('fazenda_id', 'Fazenda Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('fazenda_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fazenda_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
                {!! Form::label('codigo', 'Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('codigo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('nome', 'Nome: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('responsavel') ? 'has-error' : ''}}">
                {!! Form::label('responsavel', 'Responsavel: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('responsavel', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('responsavel', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('latitude') ? 'has-error' : ''}}">
                {!! Form::label('latitude', 'Latitude: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('latitude', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('latitude', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('longitude') ? 'has-error' : ''}}">
                {!! Form::label('longitude', 'Longitude: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('longitude', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('longitude', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('altitude') ? 'has-error' : ''}}">
                {!! Form::label('altitude', 'Altitude: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('altitude', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('altitude', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data_primeira_coleta') ? 'has-error' : ''}}">
                {!! Form::label('data_primeira_coleta', 'Data Primeira Coleta: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('data_primeira_coleta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data_primeira_coleta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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