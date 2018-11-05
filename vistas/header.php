<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="../public/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="../public/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="../public/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="../public/css/font-awesome.min.css">
        <link rel="shortcut icon" href="../public/img/favicon/favicon.ico" />
    <title>UCV Chiclayo</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body class="cm-no-transition cm-1-navbar">
    <div id="cm-menu">
        <nav class="cm-navbar cm-navbar-primary">
            <div class="cm-flex"><a href="#" class="cm-logo"></a></div>
            <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
        </nav>
        <div id="cm-menu-content">
            <div id="cm-menu-items-wrapper">
                <div id="cm-menu-scroller">
                    <ul class="cm-menu-items">
                        <li class="active"><a href="#" class="sf-house">Inicio</a></li>
                        <li><a href="#" class="sf-pencil">Factores</a></li>
                        <li><a href="#" class="sf-brick">Auditoría</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header id="cm-header">
        <nav class="cm-navbar cm-navbar-primary">
            <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
            <div class="cm-flex">
                <h1>Inicio</h1> 
                <form id="cm-search" action="inicio.php" method="get">
                    <input type="search" name="q" autocomplete="off" placeholder="Buscar...">
                </form>
            </div>
            <div class="pull-right">
                <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
            </div>
            <div class="dropdown pull-right">
                <button class="btn btn-primary md-notifications-white" data-toggle="dropdown"> <span class="label label-danger">23</span> </button>
                <div class="popover cm-popover bottom">
                    <div class="arrow"></div>
                    <div class="popover-content">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading text-overflow">
                                    <i class="fa fa-fw fa-envelope"></i> Envio de Documento.
                                </h4>
                                <p class="list-group-item-text text-overflow">Tiene una notificación del Area ...</p>
                            </a>
                        </div>
                        <div style="padding:10px"><a class="btn btn-success btn-block" href="#">Mostrar más...</a></div>
                    </div>
                </div>
            </div>
            <div class="dropdown pull-right">
                <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                    <li class="disabled text-center">
                        <a style="cursor:default;"><strong>Hugo Oyola</strong></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-cog"></i> Configuración</a>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-sign-out"></i> Salir</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>