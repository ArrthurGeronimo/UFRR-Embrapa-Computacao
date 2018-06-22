@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
<div class="container pagina-perfil">
    <div class="row"><h2>Perfil de {{ $user->name }}</h2></div>


<div class="row linha-foto-perfil">
    <div class="col-md-12 col-xs-12">
        <img src="{{ $user->avatar }}">
        <form enctype="multipart/form-data" action="/profile" method="POST">
                <h5>Atualizar Imagem de Perfil</h5>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-left btn btn-sm btn-primary" value="Alterar Foto">
        </form>  
    </div>
</div>
    
    <form action="" method="post">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" id="id" value="{{ $user->id }}">
    
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ trans('adminlte_lang::message.campoNomeCompleto') }}</label>
            <input type="name" name="name" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" value="{{ $user->name }}"/>
        </div>        
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ trans('adminlte_lang::message.campoEmail') }}</label>
            <input type="email" name="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" value="{{ $user->email }}">
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>        
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ trans('adminlte_lang::message.campoSenha') }}</label>
            <input type="password" name="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" value="{{ $user->password }}">
        </div>        
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ trans('adminlte_lang::message.campoConfirmeSuaSenha') }}</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('adminlte_lang::message.password-confirmation') }}" value="{{ $user->password }}">
        </div>        
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ trans('adminlte_lang::message.campoCpf') }}</label>
            <input type="text" name="cpf" class="form-control cpf-mask" value="{{ $user->cpf }}">
        </div>        
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ trans('adminlte_lang::message.campoDataDeNascimento') }}</label>
            <input type="text" name="nascimento" class="form-control nascimento-mask" value="{{ $user->nascimento }}">
        </div>        
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ trans('adminlte_lang::message.campoCelular') }}</label>
            <input type="text" name="celular" class="form-control celular-mask" value="{{ $user->celular }}">
        </div>        
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ trans('adminlte_lang::message.campoContato') }}</label>
            <input type="text" name="contato" class="form-control contato-mask" value="{{ $user->contato }}">
        </div>        
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>{{ trans('adminlte_lang::message.campoEndereco') }}</label>
            <input type="text" name="endereco" class="form-control" placeholder="{{ trans('adminlte_lang::message.endereco') }}" value="{{ $user->endereco }}">
        </div>        
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <label>{{ trans('adminlte_lang::message.campoEstado') }}</label>
        <select class="form-control" name="estado">
          <option>{{ trans('adminlte_lang::message.selecioneEstado') }}</option>
          <option value="estado1">Estado1</option>
          <option value="estado2">Estado2</option>
          <option value="estado3">Estado3</option>
          <option value="estado4">Estado4</option>
          <option value="estado5">Estado5</option>
        </select>    
    </div>
    <div class="col-md-6">
        <label>{{ trans('adminlte_lang::message.campoMunicipio') }}</label>
       <select class="form-control" name="municipio">
        <option>{{ trans('adminlte_lang::message.selecioneMunicipio') }}</option>
          <option value="municipio1">Município1</option>
          <option value="municipio1">Município2</option>
          <option value="municipio1">Município3</option>
          <option value="municipio1">Município4</option>
          <option value="municipio1">Município5</option>
        </select>   
    </div>
</div>


<div class="row linha-botoes">
    <div class="col-md-12 col-xs-12">
        <a href=""><button type="submit" class="btn btn-lg btn-success">{{ trans('adminlte_lang::message.campoAlterar') }}</button></a>         
    </div>
</div>


</form>

</div>
@endsection


<!--
    <div class="container pagina-perfil">
    <div class="row"><h2>Perfil de {{ $user->name }}</h2></div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>

-->