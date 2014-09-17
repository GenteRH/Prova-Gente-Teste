<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gente RH</title>

    <link href="{{ asset('assets/candidate/css/style.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/candidate/css/bootstrap.min.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/candidate/css/bootstrap.css') }}" rel="stylesheet" type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="{{ asset('assets/candidate/js/bootstrap.min.js') }}" type='text/javascript'></script>
    <script src="//github.com/igorescobar/jQuery-Mask-Plugin/blob/master/jquery.mask.min.js"></script>

</head>

<body>
    <div class="row">
          <div class="col-md-6 col-md-offset-3" id="formulario">
              @yield('content')
          </div>
  </div>
</body>
<style>
  body{
    background-color: #D3D3D3;
  }
</style>
</html>
