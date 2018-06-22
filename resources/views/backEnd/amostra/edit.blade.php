@extends('backLayout.app')
@section('title')
Edit Amostra
@stop

@section('content')

    <h1>Edit Amostra</h1>
    <hr/>

    {!! Form::model($amostra, [
        'method' => 'PATCH',
        'url' => ['amostra', $amostra->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('numero_amostra') ? 'has-error' : ''}}">
                {!! Form::label('numero_amostra', 'Numero Amostra: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('numero_amostra', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_amostra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bloco') ? 'has-error' : ''}}">
                {!! Form::label('bloco', 'Bloco: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bloco', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('bloco', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tratamento') ? 'has-error' : ''}}">
                {!! Form::label('tratamento', 'Tratamento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tratamento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tratamento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_parcela') ? 'has-error' : ''}}">
                {!! Form::label('area_parcela', 'Area Parcela: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('area_parcela', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('area_parcela', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('animal_id') ? 'has-error' : ''}}">
                {!! Form::label('animal_id', 'Animal Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('animal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('animal_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('praga_id') ? 'has-error' : ''}}">
                {!! Form::label('praga_id', 'Praga Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('praga_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('praga_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('plantiocultura_id') ? 'has-error' : ''}}">
                {!! Form::label('plantiocultura_id', 'Plantiocultura Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('plantiocultura_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('plantiocultura_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('soloamostra_id') ? 'has-error' : ''}}">
                {!! Form::label('soloamostra_id', 'Soloamostra Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('soloamostra_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('soloamostra_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pastagemamostra_id') ? 'has-error' : ''}}">
                {!! Form::label('pastagemamostra_id', 'Pastagemamostra Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('pastagemamostra_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pastagemamostra_id', '<p class="help-block">:message</p>') !!}
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