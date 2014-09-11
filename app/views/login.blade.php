<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <title>Sistema de Gestão de Recrutamento e Seleção - Login</title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('assets/login/css/bootstrap.min.css') }}" rel="stylesheet" type='text/css'>
        <link href="{{ asset('assets/login/css/login2.css') }}" rel="stylesheet" type='text/css'>
        <link href="{{ asset('assets/login/css/bootstrap-responsive.min.css') }}" rel="stylesheet" type='text/css'>
        <link href="{{ asset('assets/login/css/font-awesome.min.css') }}" rel="stylesheet" type='text/css'>

        <!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

        <!--page specific plugin styles-->

        <!--fonts-->

        <link href="{{ asset('assets/login/css/ace-fonts.css') }}" rel="stylesheet" type='text/css'>

        <!--ace styles-->

        <link href="{{ asset('assets/login/css/ace.min.css') }}" rel="stylesheet" type='text/css'>
        <link href="{{ asset('assets/login/css/ace-responsive.min.css') }}" rel="stylesheet" type='text/css'>
        <link href="{{ asset('assets/login/css/ace-skins.min.css') }}" rel="stylesheet" type='text/css'>

        <!--[if lte IE 8]>
<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->

        <!--inline styles related to this page-->

        <!--ace settings handler-->

        <script src="{{ asset('assets/login/js/ace-extra.min.js') }}" type='text/javascript'></script>
    </head>

    <body class="login-layout">
        <div class="main-container container-fluid">
            <div class="main-content">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="login-container">
                            <div class="row-fluid">
                                <div class="center">
                                    <h1>
                                        <img src="{{ asset('assets/img/logo-mini.png') }}" width="30px" alt="logo-mini" class="img-circle">
                                        <span class="blue">SGRS</span><br/>
                                        <span class="white">Sistema de Gestão de Recrutamento e Seleção</span>
                                    </h1>
                                    <h4 class="blue">&copy; Gente Recursos Humanos</h4>
                                </div>
                            </div>
                            <div class="space-6"></div>
                            <div class="row-fluid">
                                <div class="position-relative">
                                    <div id="login-box" class="login-box visible widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <h4 class="header blue lighter bigger">
                                                    <i class="icon-coffee green"></i>
                                                    Digite suas informações:
                                                </h4>
                                                <div class="space-6"></div>
                                                <form id="login" action="{{ URL::to('login') }}" method="POST">
                                                    <fieldset>
                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input id="email" name="email" class="span12" placeholder="E-mail" type="text" value=""/>
                                                                <i class="icon-user"></i>
                                                            </span>
                                                        </label>
                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input id="password" name="password" class="span12" placeholder="Digite a senha" type="password" value=""/>
                                                                <i class="icon-lock"></i>
                                                            </span>
                                                        </label>
                                                        <div class="space"></div>

                                                        <div class="clearfix">
                                                            <button type="submit" class="width-35 pull-right btn btn-small btn-primary">
                                                                <i class="icon-key"></i>
                                                                Login
                                                            </button>
                                                        </div>
                                                        <div class="space-4"></div>
                                                    </fieldset>
                                                </form>
                                                @if ( count($errors) > 0)
                                                <div class="alert alert-error">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    <h4>Campos Obrigatórios:</h4>
                                                    @foreach ($errors->all() as $e)
                                                    <li>{{ $e }}</li>
                                                    @endforeach
                                                </div>
                                                @endif
                                            </div><!--/widget-main-->
                                        </div><!--/widget-body-->
                                    </div><!--/login-box-->
                                </div><!--/position-relative-->
                            </div>
                        </div>
                    </div><!--/.span-->
                </div><!--/.row-fluid-->
            </div>
        </div><!--/.main-container-->

        <!--basic scripts-->

        <!--[if !IE]>-->
        <script type="text/javascript">
            window.jQuery || document.write("<script src="{{ asset('assets/login/js/jquery-2.0.3.min.js') }}">"+"<"+"/script>");

        </script>

        <!--<![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

        <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src="{{ asset('assets/login/js/jquery.mobile.custom.min.js') }}">"+"<"+"/script>");
        </script>
        <script src="{{ asset('assets/login/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/login/js/ace-extra.min.js') }}" type='text/javascript'></script>

        <!--page specific plugin scripts-->

        <!--ace scripts-->
        <script src="{{ asset('assets/login/js/ace-elements.min.js') }}" type='text/javascript'></script>
        <script src="{{ asset('assets/login/js/ace.min.js') }}" type='text/javascript'></script>

        <!--inline scripts related to this page-->

        <script type="text/javascript">
            function show_box(id) {
                jQuery('.widget-box.visible').removeClass('visible');
                jQuery('#'+id).addClass('visible');
            }
        </script>
    </body>
</html>
