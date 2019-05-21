<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel | Contato</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body class="grey lighten-3">
    <nav class=" indigo darken-3" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Lucas VSCS</a>

            <ul class="right hide-on-med-and-down">
                <li class="active"><a href="#"><i class="material-icons left">search</i>Visualizar mensagem enviadas</a>
                </li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a href="index.php"><i class="material-icons left">add</i>Nova mensagem</a></li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a href="https://gitlab.com/vscs"><i class="fab fa-gitlab"></i></a></li>
                <li><a href="https://github.com/LucasVSCS"><i class="fab fa-github"></i></a></li>
                <li><a href="https://www.linkedin.com/in/lucasvscs/"><i class="fab fa-linkedin"></i></a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="index.php"><i class="material-icons left">add</i>Nova mensagem</a></li>
                <li class="active"><a href="#"><i class="material-icons left">search</i>Mensagens enviadas</a></li>
            </ul>

            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h2 class="header center black-text">Visualizar mensagens <i class="small material-icons">message</i>
            </h2>

            <div class="row center-align">
                <div class="col s12">
                    <div class="card-panel white">
                        <h4 class="grey-text">Mensagens recebidas</h4>

                        <div class="row">
                            <table class="display responsive-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Telefone</th>
                                        <th>Mensagem</th>
                                    </tr>
                                </thead>

                                <tbody id="retornoSelect">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="retornoDados"></div>

    <footer class="page-footer grey lighten-3">
        <div class="footer-copyright grey darken-4">
            <div class="container center">
                Lucas VSCS - 2019
            </div>
        </div>
    </footer> 



    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/ajax.js"></script>

    <script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
    </script>
</body>

</html>