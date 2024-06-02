<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kalculadora | Logado</title>
<link rel="icon" type="image/png" sizes="16x16" href="{{ url('/dist/img/AdminLTELogo.png') }}">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ Secure_asset('plugins/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="{{ Secure_asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ Secure_asset('dist/css/adminlte.min.css?v=3.2.0') }}">
</head>
<body class="hold-transition login-page">
    <div class="row">
    <div class="col">
        <img src="{{ url('/dist/img/logo.png') }}" >
    </div>
    <div class="col">
<div class="login-box">
<div class="login-logo">
<a href="https://kalculadora-production.up.railway.app/"><b>Kalculadora</a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Logado</p>
<form action="{{ route('login') }}" method="post">
 @csrf       
<div class="input-group mb-3">
<input id="email" name="email" type="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password"  id="password"  name="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
Recuerdame
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Logar</button>
</div>

</div>
</form>


</div>
</div>
</div>
    </div>
<script src="{{ Secure_asset('plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ Secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ Secure_asset('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>
</html>