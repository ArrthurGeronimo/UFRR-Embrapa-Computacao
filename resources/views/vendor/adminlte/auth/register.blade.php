@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="container-registro">

    @if (count($errors) > 0)
    <div class="uk-alert-danger alerta-erro" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p><strong>Ops!</strong> {{ trans('adminlte_lang::message.someproblems') }}</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container box-registro">
        <div class="row">
            <div class="col-md-4 container-img">
                @include('vendor.adminlte.auth.registro-img')
            </div>
            <div class="col-md-8 container-formulario">
                @include('vendor.adminlte.auth.registro-formulario')
            </div>
    </div>
</div>
    
</body>



@endsection
