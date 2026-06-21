<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/locadora/images/logo.jpg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login!</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="had-container">

        <div class="parallax-container logueo">
            <div class="parallax"><img src="https://alistapart.com/d/438/fig-6--background-blend-mode.jpg"></div>
            <div class="row"><br>
                <div class="col m8 s8 offset-m2 offset-s2 center">
                    <h4 class="truncate bg-card-user">
                        <img src="/Locadora/IMAGES/logo.jpg" alt="" class="circle responsive-img">
                        <div class="row login">
                            <h4>Controle de Acesso.</h4>
                            <form action="login.php" method="POST" class="col s12">
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons iconis prefix">account_box</i>
                                        <input id="icon_prefix" type="text" name="login" class="validate">
                                        <label for="icon_prefix">Usuário</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons iconis prefix">enhanced_encryption</i>
                                        <input id="password" type="password" name="pwd" class="validate">
                                        <label for="password">Senha</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Acessar</button>
                                </div>
                            </form>
                        </div>
                    </h4>
                </div>
            </div>
        </div>
    </div>


    </div> <!-- fin del .container -->

    <footer class="page-footer grey darken-4" style="position: absolute; bottom: 0; left: 0; right: 0;">
        <div class="footer-copyright">
            <div class="container center">
                Copyright © 2026 - Nicholas/Valdrei
            </div>
        </div>
    </footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="mySpxript.js"></script>
</body>

</html>