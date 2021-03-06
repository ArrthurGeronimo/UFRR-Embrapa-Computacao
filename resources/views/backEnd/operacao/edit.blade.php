@extends('backLayout.app')
@section('title')
Edit Operacao
@stop

@section('content')

    <h1>Edit Operacao</h1>
    <hr/>

    {!! Form::model($operacao, [
        'method' => 'PATCH',
        'url' => ['operacao', $operacao->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('servico_id') ? 'has-error' : ''}}">
                {!! Form::label('servico_id', 'Servico Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('servico_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('servico_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('piquete_id') ? 'has-error' : ''}}">
                {!! Form::label('piquete_id', 'Piquete Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('piquete_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('piquete_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('insumo_id') ? 'has-error' : ''}}">
                {!! Form::label('insumo_id', 'Insumo Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('insumo_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('insumo_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
                {!! Form::label('data', 'Data: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('data', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('unidade') ? 'has-error' : ''}}">
                {!! Form::label('unidade', 'Unidade: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('unidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('unidade', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantidade') ? 'has-error' : ''}}">
                {!! Form::label('quantidade', 'Quantidade: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('quantidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor_unitario') ? 'has-error' : ''}}">
                {!! Form::label('valor_unitario', 'Valor Unitario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('valor_unitario', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('valor_unitario', '<p class="help-block">:message</p>') !!}
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