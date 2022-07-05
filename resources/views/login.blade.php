
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>Elodis</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Connexion administrateur</h4>
                            @if(session()->get('msg')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                     {{session()->get('msg')}}
                                </div>
                            @endif


                            <form action="/verifier" method="post">
                            @csrf
                                <div class="form-group">
                                    <label>ADRESSE E-MAIL</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>MOT DE PASSE</label>
                                    <input type="password" class="form-control" name="pass" placeholder="mot de passe">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">S'identifier</button>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>