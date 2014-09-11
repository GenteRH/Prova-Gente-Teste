<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gente RH</title>

        <link href="{{ asset('assests/css/style.css') }}" rel="stylesheet" type='text/css'>
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type='text/css'>
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/3.3.0/stylesheets/locastyle.css">

        <script src="//assets.locaweb.com.br/locastyle/3.3.0/javascripts/locastyle.js"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" type='text/javascript'></script>
        <script src="//github.com/igorescobar/jQuery-Mask-Plugin/blob/master/jquery.mask.min.js"></script>

    </head>

    <body bgcolor="D3D3D3">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="formulario">
                <h1 class="text-center"><img src="{{ asset('assets/img/logo-mini.png') }}" alt="logo-mini" class="img-circle" width="40px">  Gente RH</h1>

                <h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
                <h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
                <h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
                <h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
                <h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
                <h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
                <h3><i class="fa fa-user" colo="#000"></i> Dados</h3>
                <hr class="forte">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Telefone</label>
                        <div class="col-sm-10">
                            <input type="text" class="ls.mask.phone8_with_ddd" id="inputPassword3" placeholder="Telefone">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Celular</label>
                        <div class="col-sm-10">
                            <input type="text" class="ls.mask.phone9_with_ddd" id="inputPassword3" placeholder="Celular">
                        </div>
                    </div>
                    <div align=bottom>
                        <a href="{{ URL::to('prova') }}"/><button type="button" class="btn btn-success" id="botao">Iniciar</button>
                    </div>
                </form>
            </div>

            <style>
                #formulario {
                    position: absolute;
                    left: 46%;
                    top:30%;
                    margin-left: -300px;
                    margin-top: -120px;
                    background-color: #F5F5F5;
                    border-radius: 10px;
                    box-shadow: 6px 6px 6px #000;

                }
                #botao {
                    text-align:center;
                    margin-bottom:3%;
                    float:right;
                }
                h1{
                    padding-top: 3x;
                    color: #000;
                }
                h3
                {
                    color: #000;
                }
                body
                {
                    background-color: #D3D3D3;
                }
                #forte {
                    border: 0.1em solid #000;
                    color: #000;
                    border-radius: 20px;
                    background-color: #000;
                    margin: 15px 0;

                }
            </style>
            </body>

        </html>
