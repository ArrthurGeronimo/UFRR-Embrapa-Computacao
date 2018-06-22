<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status 
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                    -->
                </div>
            </div>
        @endif

        <!-- search form (Optional) 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.campoMenu') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="{{ url('fazenda') }}"><i class='fa fa-link'></i> <span>Fazendas</span></a></li>
            <li><a href="{{ url('talhao') }}"><i class='fa fa-link'></i> <span>Talhões</span></a></li>
            <li><a href="{{ url('animal') }}"><i class='fa fa-link'></i> <span>Animais</span></a></li>
            <li><a href="{{ url('manejoanimal') }}"><i class='fa fa-link'></i> <span>Manejo Animal</span></a></li>
            <li><a href="{{ url('animaldado') }}"><i class='fa fa-link'></i> <span>Animal Dado</span></a></li>
            <li><a href="{{ url('amostra') }}"><i class='fa fa-link'></i> <span>Amostras</span></a></li>
            <li><a href="{{ url('estacao') }}"><i class='fa fa-link'></i> <span>Estações</span></a></li>
            <li><a href="{{ url('piquete') }}"><i class='fa fa-link'></i> <span>Piquetes</span></a></li>
            <li><a href="{{ url('operacao') }}"><i class='fa fa-link'></i> <span>Operações</span></a></li>
            <li><a href="{{ url('insumo') }}"><i class='fa fa-link'></i> <span>Insumo</span></a></li>
            <li><a href="{{ url('servico') }}"><i class='fa fa-link'></i> <span>Serviços</span></a></li>
            <li><a href="{{ url('praga') }}"><i class='fa fa-link'></i> <span>Pragas</span></a></li>
            <li><a href="{{ url('cultura') }}"><i class='fa fa-link'></i> <span>Cultura</span></a></li>
            <li><a href="{{ url('plantiocultura') }}"><i class='fa fa-link'></i> <span>Plantio Cultura</span></a></li>
            <li><a href="{{ url('soloamostra') }}"><i class='fa fa-link'></i> <span>Amostras de Solo</span></a></li>

            <!--
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
            -->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
