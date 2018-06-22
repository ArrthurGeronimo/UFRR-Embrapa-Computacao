@extends('backLayout.app')
@section('title')
Create new Praga
@stop

@section('content')

    <h1>Create New Praga</h1>
    <hr/>

    {!! Form::open(['url' => 'praga', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('amostra_id') ? 'has-error' : ''}}">
                {!! Form::label('amostra_id', 'Amostra Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('amostra_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('amostra_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
                {!! Form::label('tipo', 'Tipo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tipo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('especie') ? 'has-error' : ''}}">
                {!! Form::label('especie', 'Especie: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('especie', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('especie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('densidade') ? 'has-error' : ''}}">
                {!! Form::label('densidade', 'Densidade: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('densidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('densidade', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
                {!! Form::label('area', 'Area: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('area', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
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