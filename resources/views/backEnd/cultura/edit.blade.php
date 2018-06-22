@extends('backLayout.app')
@section('title')
Edit Cultura
@stop

@section('content')

    <h1>Edit Cultura</h1>
    <hr/>

    {!! Form::model($cultura, [
        'method' => 'PATCH',
        'url' => ['cultura', $cultura->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('especie') ? 'has-error' : ''}}">
                {!! Form::label('especie', 'Especie: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('especie', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('especie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('material') ? 'has-error' : ''}}">
                {!! Form::label('material', 'Material: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('material', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('material', '<p class="help-block">:message</p>') !!}
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