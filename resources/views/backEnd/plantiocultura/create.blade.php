@extends('backLayout.app')
@section('title')
Create new Plantiocultura
@stop

@section('content')

    <h1>Create New Plantiocultura</h1>
    <hr/>

    {!! Form::open(['url' => 'plantiocultura', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('piquete_id') ? 'has-error' : ''}}">
                {!! Form::label('piquete_id', 'Piquete Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('piquete_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('piquete_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('amostra_id') ? 'has-error' : ''}}">
                {!! Form::label('amostra_id', 'Amostra Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('amostra_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('amostra_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data_amostra') ? 'has-error' : ''}}">
                {!! Form::label('data_amostra', 'Data Amostra: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('data_amostra', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data_amostra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('peso_parcela') ? 'has-error' : ''}}">
                {!! Form::label('peso_parcela', 'Peso Parcela: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('peso_parcela', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('peso_parcela', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('peso_amostra') ? 'has-error' : ''}}">
                {!! Form::label('peso_amostra', 'Peso Amostra: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('peso_amostra', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('peso_amostra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantidade_espigas') ? 'has-error' : ''}}">
                {!! Form::label('quantidade_espigas', 'Quantidade Espigas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('quantidade_espigas', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade_espigas', '<p class="help-block">:message</p>') !!}
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