@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container-fazendas">

    <h1>{{$fazenda->nome}}</h1>

        <div class="container-fazenda">
            <div class="row">
                <div class="box-tools pull-right">
                <a href="{{ url('fazenda/' . $fazenda->id . '/edit') }}"><button type="button" class="btn btn-box-tool"><i class="fas fa-edit"> EDITAR</i></a>
                </button>
                {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['fazenda', $fazenda->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('img/mapa.jpg')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        <strong>INFORMAÇÕES</strong>
                    </p>

                  <div class="progress-group">
                    <span class="progress-text"><strong>Nome do Dono: </strong></span class="regular"><span>Nome Dono</span></br>
                  </div>
                  
                  <div class="progress-group">
                    <span class="progress-text"><strong>Endereço: </strong></span class="regular"><span>{{$fazenda->endereco}}</span></br>
                  </div>

                  <div class="progress-group">
                    <span class="progress-text"><strong>Latitude: </strong></span class="regular"><span>{{$fazenda->latitude}}</span></br>
                  </div>

                  <div class="progress-group">
                    <span class="progress-text"><strong>Longitude: </strong></span class="regular"><span>{{$fazenda->longitude}}</span></br>
                  </div>

                  <div class="progress-group">
                    <span class="progress-text"><strong>Estado: </strong></span class="regular"><span>{{$fazenda->estado}}</span></br>
                  </div>

                  <div class="progress-group">
                    <span class="progress-text"><strong>Município: </strong></span class="regular"><span>{{$fazenda->municipio}}</span></br>
                  </div>

                  <div class="progress-group">
                    <span class="progress-text"><strong>Responsável: </strong></span class="regular"><span>{{$fazenda->responsavel}}</span></br>
                  </div>

                  <div class="progress-group">
                    <span class="progress-text"><strong>Contato do Responsável: </strong></span class="regular"><span>{{$fazenda->celular_responsavel}}</span></br>
                  </div>

                </div> <!-- /col-md-12 -->
            </div> <!-- /row -->


            <div class="row fazenda-outros-botoes"> <!-- .row (botoes) -->
              <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>0</h3>
                      <p>Talhões</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-crop"></i>
                    </div>
                    <a href="{{ url('fazenda/'.$fazenda->id.'/talhoes' ) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>
   
              <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>0</h3>
                      <p>Animais</p>
                    </div>
                    <div class="icon">
                      <i class="fab fa-sticker-mule"></i>
                    </div>
                    <a href="{{ url('fazenda/'.$fazenda->id.'/animais' ) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>
           
              <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3>0</h3>

                      <p>VAZIO</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>
      
              <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3>0</h3>

                      <p>VAZIO</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>
       
              </div> <!-- /.row (botoes) -->

        </div> <!-- /container-fazendas -->

@endsection