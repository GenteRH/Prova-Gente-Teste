<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gente Recursos Humanos</title>

    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets/default/css/bootstrap.min.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/default/css/metisMenu.min.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/default/css/dataTables.bootstrap.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/default/css/timeline.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/default/css/sb-admin-2.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/default/css/morris.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/default/css/select2.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/default/font-awesome/font-awesome.min.css') }}" rel="stylesheet" type='text/css'>

    <!-- JS -->

    <script src="{{ asset('assets/default/js/jquery-1.11.0.js') }}"type='text/javascript'></script>
    <script src="{{ asset('assets/default/js/bootstrap.min.js')}}"type='text/javascript'></script>
    <script src="{{ asset('assets/default/js/metisMenu.min.js') }}"type='text/javascript'></script>
    <script src="{{ asset('assets/default/js/select2.js')}}"type='text/javascript'></script>
    <script src="{{ asset('assets/default/js/dataTables.bootstrap.min.js') }}"type='text/javascript'></script>
    <script src="{{ asset('assets/default/js/raphael.min.js') }}"type='text/javascript'></script>
    <script src="{{ asset('assets/default/js/ace-extra.min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('assets/default/js/sb-admin-2.js') }}" type='text/javascript'></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo-mini.png') }}" width="30px" alt="logo-mini" class="img-circle">  Gente Recursos Humanos</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ URL::to('login') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href=""><i class="fa fa-tachometer"></i>   Cadastro<span class="fa arrow down"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::to('evaluations/') }}"><i class="fa fa-angle-double-right"></i>   Avaliação</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('questions/') }}"><i class="fa fa-angle-double-right"></i>   Pergunta</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('users/') }}"><i class="fa fa-angle-double-right"></i>   Usuário</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ URL::to('results/') }}"><i class="fa fa-file-text-o"></i>    Resultados</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
         @yield('content')
     </div>
     <!-- /#page-wrapper -->
 </div>
 <!-- /#wrapper -->
</body>
</html>

