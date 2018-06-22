<head>
    <meta charset="UTF-8">
    <title> Sistema - @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />

    <!-- Fonte Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/css/uikit.min.css" />

    <!-- STYLE Geral -->
    <link href="{{ asset('/css/style_geral.css') }}" rel="stylesheet" type="text/css" />
    <!-- Página de Registro -->
    <link href="{{ asset('/css/style_pagina_registro.css') }}" rel="stylesheet" type="text/css" />
    <!-- Página de Perfil -->
    <link href="{{ asset('/css/style_pagina_perfil.css') }}" rel="stylesheet" type="text/css" />
    <!-- Página de Login -->
    <link href="{{ asset('/css/style_pagina_login.css') }}" rel="stylesheet" type="text/css" />
    <!-- MENU DO TOPO -->
    <link href="{{ asset('/css/style_menu_topo.css') }}" rel="stylesheet" type="text/css" />

    <!-- FAZENDAS -->
    <link href="{{ asset('/css/style_pagina_fazendas.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- CSS DAS TABELAS -->
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Tabelas Responsivas-->
    <link href="{{ asset('/css/style_tabelas.css') }}" rel="stylesheet" type="text/css" />
    

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>


</head>
