@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="header-tabela">
    <h1>Fazendas de {{ Auth::user()->name }} </h1>
    <a href="{{ url('fazenda/create') }}" class="btn btn-lg btn-adicionar"><i class="fas fa-plus-circle"></i> Adicionar Nova Fazenda</a>
</div>
 
 

    <div class="table-responsive-vertical shadow-z-1">
        <table class="table table-hover table-mc-light-blue" id="tblfazenda">
            <thead class="tabela-topo">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($fazenda as $item)
                <tr class="tabela-corpo">
                    <td data-title="ID"><a href="{{ url('fazenda', $item->id) }}">{{ $item->user_id }}</a></td>
                    <td data-title="Nome">{{ $item->nome }}</td>
                    <td data-title="Endereço">{{ $item->endereco }}</td>
                    <td data-title="Ações" class="tabela-botoes">
                        <a href="{{ url('fazenda/' . $item->id . '/edit') }}" class="btn btn-success btn-xs">Visualizar</a> 
                        <a href="{{ url('fazenda/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Editar</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['fazenda', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



<!--
  <div class="table-responsive-vertical shadow-z-1">
  <table class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Link</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td data-title="ID">1</td>
          <td data-title="Name">Material Design Color Palette</td>
          <td data-title="Link">
            <a href="https://github.com/zavoloklom/material-design-color-palette" target="_blank">GitHub</a>
          </td>
          <td data-title="Status">Completed</td>
        </tr>

      </tbody>
    </table>
  </div>
-->


@endsection
