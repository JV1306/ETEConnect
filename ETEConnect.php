<meta charset="UTF-8">
<?php
//DADOS PARA CONEXÃO
$servidor   =   "localhost";   //SERVIDOR
$bd         =   "companhia";       //DATABASE
$usuario    =   "root";        //USUÁRIO
$senha      =   "";            //SENHA
?>
<html>
<meta charset="UTF-8">
<head>
    <title>ETEConnect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/37678ac97a.js"></script>
    <style>
        /*fundo de rodape*/
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        nav.navbar-inverse {
            background-color: #9932CC;
        }

        nav.navbar {
            font-family: 'Arial Rounded MT';
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="eteconnect.php">ETEConnect</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="eteconnect.php">Feed de Notícias</a></li>
                <li><a href="eteconnect_estudantil.php">Estudantil</a></li>
                <li><a href="mensagens.php">Mensagens</a></li>
                <li><a href="psicHI.php">PsicHI</a></li>
                <li><a href="cultu_go.php">CultuGo</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sair</a></li>
            </ul>
        </div>
    </nav>


    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3 well">
                <div class="well">
                    <p><a href="#">Meu Perfil</a></p>
                    <img src="jvtds.png">
                </div>
                <div class="well">
                    <p><a href="interesses.php">Interesses</a></p>
                </div>
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">X</a>
                    <p><strong>Ei!</strong></p>
                    Esperando atualizações sobre a pandemia de Coronavírus? Clique no link e vá para as notícias mais recentes da superintendência!
                </div>
                <p><a href="https://www.cps.sp.gov.br/comunicados/">Link</a></p>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-default text-left">
                            <div class="panel-body">
                               <form action="action.php" method="post">
                                   <p> Status:
                                    <input type=text name="poster"><br>
                                    <input type="text" name="desc"><br>
                                    <input type="submit"></p>
                                </form>
                                <button type="button" class="btn btn-default btn-sm">

                                    <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <p>John</p>
                            <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <p>Teste de conceito.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <p>Bo</p>
                            <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <p>Apenas mais um teste.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <p>Jane</p>
                            <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <p>Teste.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <p>Anja</p>
                            <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <p> Até que em fim mudei as cores!</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>
</body>
</html>
