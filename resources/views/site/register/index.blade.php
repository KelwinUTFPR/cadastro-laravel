<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Criar conta</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


     <link rel="stylesheet" href="{{asset('css_login/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @toastr_css


    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="color" >

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                @csrf
                <div class="login-form">
                    <form action="{{route('site.register.form')}}" method="post" novalidate="novalidate" >
                        @csrf
                    <img src="{{asset('images/lyon_hori.png')}}"><br><br>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="txtEmail" placeholder=" Email" value="{{old('email')}}">
                        </div>
                        @error('email')
                        <div class="invalido">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Nome</label>
                            <input id="name" name="name" type="text" class="txtEmail" placeholder="Nome Completo" value="{{old('name')}}">
                        </div>
                        @error('name')
                        <div class="invalido">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Data de Nascimento</label>
                            <input id="date" name="date" type="date" class="txtEmail" value="{{old('date')}}">
                        </div>
                        @error('date')
                        <div class="invalido">{{ $message }}</div>
                        @enderror
						<div class="form-group">
                            <label>Senha</label>
                            <input id="password" name="password" type="password" class="txtSenha" placeholder=" Senha">
                        </div>
                        @error('password')
                        <div class="invalido">{{ $message }}</div>
                        @enderror
						  <div class="form-group">
                            <label>Confirme a senha</label>
                            <input id="password "name="password" type="password" class="txtSenha" placeholder=" Confirmar Senha">
                        </div>
                        @error('password')
                        <div class="invalido">{{ $message }}</div>
                        @enderror

                      <button type="submit" class="btn btnEntrar">Cadastrar-se</button>

                    </form>
        </div>
            </div>
        </div>
    </div >









    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

    @toastr_js
    @toastr_render

</body>
</html>
