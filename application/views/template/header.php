<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
        <title><?php echo $titulo ?></title>
        <!-- Bootstrap core CSS -->
        <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Custom styles for this template -->
        <link href="<?= base_url('assets/css/owl.carousel.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/owl.theme.default.min.css') ?>"  rel="stylesheet">
        <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/estilo.css') ?>" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?= base_url('assets/js/ie-emulation-modes-warning.js') ?>"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top">
        <!-- Navigation -->
        <!-- Header -->
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logoo.png" class="logo-sru" alt="SRU theme logo"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>
                            <li>
                                <a class="page-scroll" href="<?= base_url() ?>">Home</a>
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cardápio</a>
                                <div class="dropdown-menu drop-content">
                                    <a href="<?= base_url('index.php/cardapio_controller/novo/') ?>">Novo <img class="imgNew" src="<?= base_url('assets/images/new_item.png') ?>" > </a>
                                    <a href="<?= base_url('index.php/cardapio_controller/listar/') ?>">Listar <img class="imgNew" src="<?= base_url('assets/images/icons-list-64.png') ?>" ></a>
                                </div>
                            </li>

                            <li>
                                <a class="page-scroll" href="#">Relatório</a>
                            </li>  
                            <li>
                                <a class="page-scroll" href="#">Buscar</a>
                            </li>  
                            <li>
                                <a class="page-scroll" href="#">Contatos</a>
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                                <div class="dropdown-menu drop-content">
                                    <a href="<?= base_url('index.php/acesso_controller/resultadoAcesso/') ?>">Listar <img class="imgNew" src="<?= base_url('assets/images/icons-list-64.png') ?>" ></a>
                                </div>
                            </li>  
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <fieldset>
            <legend><?php echo $titulo ?>            </legend>



            <!-- Conteúdo aqui -->
