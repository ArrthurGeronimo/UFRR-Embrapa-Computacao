<div class="row">
	<h3>{{ trans('adminlte_lang::message.campoInscreva-seNoSistema') }}</h3>
</div>

<form action="{{ url('/register') }}" method="post">
	@csrf
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	

<div class="row">
	<div class="col-md-6">
        <div class="form-group">
    		<label>{{ trans('adminlte_lang::message.campoNomeCompleto') }}</label>
    		<input type="name" name="name" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" value="{{ old('name') }}"/>
  		</div>        
	</div>
	<div class="col-md-6">
        <div class="form-group">
    		<label>{{ trans('adminlte_lang::message.campoEmail') }}</label>
    		<input type="email" name="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" value="{{ old('email') }}">
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
    		<input type="password" name="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}">
  		</div>        
	</div>
	<div class="col-md-6">
        <div class="form-group">
    		<label>{{ trans('adminlte_lang::message.campoConfirmeSuaSenha') }}</label>
    		<input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('adminlte_lang::message.password-confirmation') }}">
  		</div>        
	</div>
</div>

<div class="row">
	<div class="col-md-6">
        <div class="form-group">
    		<label>{{ trans('adminlte_lang::message.campoCpf') }}</label>
    		<input type="text" name="cpf" class="form-control cpf-mask" value="{{ old('cpf') }}">
  		</div>        
	</div>
	<div class="col-md-6">
        <div class="form-group">
    		<label>{{ trans('adminlte_lang::message.campoDataDeNascimento') }}</label>
    		<input type="text" name="nascimento" class="form-control nascimento-mask" value="{{ old('nascimento') }}">
  		</div>        
	</div>
</div>

<div class="row">
	<div class="col-md-6">
        <div class="form-group">
    		<label>{{ trans('adminlte_lang::message.campoCelular') }}</label>
    		<input type="text" name="celular" class="form-control celular-mask" value="{{ old('celular') }}">
  		</div>        
	</div>
	<div class="col-md-6">
        <div class="form-group">
    		<label>{{ trans('adminlte_lang::message.campoContato') }}</label>
    		<input type="text" name="contato" class="form-control contato-mask" value="{{ old('contato') }}">
  		</div>        
	</div>
</div>

<div class="row">
	<div class="col-md-12">
        <div class="form-group">
    		<label>{{ trans('adminlte_lang::message.campoEndereco') }}</label>
    		<input type="text" name="endereco" class="form-control" placeholder="{{ trans('adminlte_lang::message.endereco') }}" value="{{ old('endereco') }}">
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
	<div class="col-md-6 col-xs-6">
		<div class="form-group">
    		<input type="checkbox" name="terms"> {{ trans('adminlte_lang::message.campoEuAceitoOsTermos') }}
  		</div>
  		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#termosModal">{{ trans('adminlte_lang::message.campoLerOsTermos') }}</button> 
		
	</div>
	<div class="col-md-6 col-xs-6">
		<a href=""><button type="button" class="btn btn-lg btn-danger">{{ trans('adminlte_lang::message.campoCancelar') }}</button></a>
		<a href=""><button type="submit" class="btn btn-lg btn-success">{{ trans('adminlte_lang::message.campoCadastrar') }}</button></a>         
	</div>
</div>


</form>

@include('adminlte::auth.termos')

