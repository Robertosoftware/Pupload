<?php include('usuario/session.php') ?>
<!DOCTYPE html>
<html lang="es">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resources/fav.ico.jpg">
        <!-- Bootstrap core CSS -->
    <link href="resources/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme -->
    <link href="resources/navbar-fixed-top.css" rel="stylesheet">
   <!-- Custom styles for this template
    <link href="theme.css" rel="stylesheet">-->
		<script src="js/myModule.js"></script>
		<script src="js/myControllers.js"></script>
		
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
	<title>Inicio del Usuario</title>
	<link rel="stylesheet" type="text/css" href="resources/style2.css">
</head>
<body ng-app="myApp">
	<div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#!">Mandra Soluciones</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#!">Inicio</a></li>
	    <li><a href="#!Actualizate">Actualiza tus datos</a></li>
            <li><a href="#!Activa">Activa o desactivate</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php?logout='1'">Salir de la sesión<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		<div ng-view></div>
		</div>
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="resources/bootstrap.min.js"></script>
    <script src="resources/docs.min.js"></script>
</body>
</html>
