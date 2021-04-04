<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
 <link rel="icon" href="images/icon.png" type="image/png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="{{asset('css_login/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('layout/style/layout.css')}}">


    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>


<body class="color" >

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">

                    </a>
                </div>
                <div class="login-form">
                    <form action="{{route('site.login.form')}}" method="post" novalidate="novalidate" >
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
                            <label>Senha</label>
                            <input name="password" type="password" class="txtSenha" placeholder=" Senha">
                        </div>
                        @error('password')
                        <div class="invalido">{{ $message }}</div>
                        @enderror
                        <div class="checkbox lblEspaco ">
                            <label>
                                <input type="checkbox" class="lblEspaco"> Lembre de mim
                            </label >


                        </div>
                       <button type="submit" class="btn btnEntrar">Entrar</button>

                        <div class="register-link m-t-15 text-center lblEspaco">
                            <p>Você não tem conta? <a href="{{route('site.register')}}"> Criar uma conta</a></p>
                        </div>
                    </form>
        </div>
            </div>
        </div>
    </div >



    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>
</html>
