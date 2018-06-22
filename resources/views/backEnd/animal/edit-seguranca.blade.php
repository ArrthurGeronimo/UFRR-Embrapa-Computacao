@extends('backLayout.app')
@section('title')
Edit Animal
@stop

@section('content')

    <h1>Edit Animal</h1>
    <hr/>

@if (Session::has('message'))
    <div class="alert alert-success">
        <h4>{{ Session::get('message') }}</h4>
    </div>
@endif

    {!! Form::model($animal, [
        'method' => 'PATCH',
        'url' => ['animal', $animal->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('fazenda_id') ? 'has-error' : ''}}">
                {!! Form::label('fazenda_id', 'Fazenda Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('fazenda_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fazenda_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('numero_fazenda') ? 'has-error' : ''}}">
                {!! Form::label('numero_fazenda', 'Numero Fazenda: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('numero_fazenda', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_fazenda', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pai') ? 'has-error' : ''}}">
                {!! Form::label('pai', 'Pai: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mae') ? 'has-error' : ''}}">
                {!! Form::label('mae', 'Mae: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mae', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mae', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nascimento') ? 'has-error' : ''}}">
                {!! Form::label('nascimento', 'Nascimento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('nascimento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nascimento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('procedencia') ? 'has-error' : ''}}">
                {!! Form::label('procedencia', 'Procedencia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('procedencia', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('procedencia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('entrada_fazenda') ? 'has-error' : ''}}">
                {!! Form::label('entrada_fazenda', 'Entrada Fazenda: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('entrada_fazenda', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('entrada_fazenda', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('saida_fazenda') ? 'has-error' : ''}}">
                {!! Form::label('saida_fazenda', 'Saida Fazenda: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('saida_fazenda', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('saida_fazenda', '<p class="help-block">:message</p>') !!}
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