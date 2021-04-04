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

                <div class="login-form">
                    <form action="{{route('site.register.form')}}" method="post" >

                    <img src="{{asset('images/lyon_hori.png')}}"><br><br>
                    DADOS DO USUÁRIO LOGADO:
                    <br><br>
                        <div class="form-group">
                            <label>Email:</label><br>
                            {{Auth::user()->email}}<br><br>
                        </div>
						<div class="form-group">
                            <label>Nome:</label><br>
                            {{Auth::user()->name}}<br><br>
                        </div>
                        <div class="form-group">
                            <label>Data de Nascimento:</label><br>
                            {{Auth::user()->date}}<br><br>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <a href="{{route('site.logout')}}"> Efetuar Logout</a>
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

    @toastr_js
    @toastr_render

</body>
</html>
