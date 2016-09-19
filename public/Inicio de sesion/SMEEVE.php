<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Sistema de monitoreo epidemiol&oacute;gico de enfermedades virales</title>
	<link rel="shortcut icon" type="image/ico" href="http://www.uaslp.mx/_catalogs/masterpage/UASLP/Imagenes/favicon16.png"/>
    <link rel="stylesheet" type="text/css" href="./adds/bootstrap-3.3.5-dist/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="./adds/pagina.css" />
        

    <script type="text/javascript" language="javascript" src="./adds/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" language="javascript" src="./adds/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="./adds/jasny-bootstrap-3.1.0-dist/js/jasny-bootstrap.min.js"></script>
    

	<link href="./adds/bootstrap-3.3.5-dist/assets/css/docs.min.css" rel="stylesheet">
	
	<!-- timepicker-->
	<link rel="stylesheet" type="text/css" href="./adds/Datetimepicker/css/bootstrap-datetimepicker.min.css">
	<script type="text/javascript"  charset="UTF-8" src="./adds/Datetimepicker/js/locales/bootstrap-datetimepicker.es.js"></script>
	<script type="text/javascript"  charset="UTF-8" src="./adds/Datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<!--<link href="./adds/jquery.min.js">-->


	<!--[if lt IE 9]><script src="./adds/bootstrap-3.3.2-dist/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="./adds/bootstrap-3.3.5-dist/assets/js/ie-emulation-modes-warning.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!--mapa--> 
	  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>


</head>

<body style="background-color:#F1F4F9">
    
    <div class="container_gral" style="height:auto; position:relative; width:1025px; margin-top: 20px; >
    <a href="http://www.genomica.uaslp.mx/index.html#"><img src="./comun/imagenes/Header.jpg"></a>
	
	<?php include('comun/menu.php');?>
 	<?php include('modales/mapa.php');?>
		
		<div id="cargando" style="position:fixed; top:50%; left:50%; width:70px; height:65px; margin-top:-80px; margin-left:-35px; z-index:1000;">
            <div class="panel panel-default" style="width:70px; height:65px"><img style="margin-top: 10px; margin-left: 12px" width="45px" class="center-block topmargin50" src="./comun/imagenes/cargando.gif"></div>
        </div>
		
		
		
		<div class="panel panel-default">
 			<div class="panel-body" style="color:gray; font-size:.8em">
    				&nbsp;&nbsp;Facultad de Medicina de la Universidad Aut&oacute;noma de San Luis Potos&iacute;. <br>
				    &nbsp;&nbsp;Avenida Venustiano Carranza #2405 Colonia Filtros Las Lomas, CP 78210 San Luis Potosí, México. <br>
				    &nbsp;&nbsp;Tel: +52 (444) 826-2300 ext 6685, 6684 <br>
				    &nbsp;&nbsp;E-mail: lgvh.uaslp@gmail.com
  			</div>
		</div>
       	<?php include('modales/inicio_sesion.php'); ?>
		<?php include('modales/registro_usuario.php'); ?>
		

	</div>

</body>

<script src="pagina.js"></script>

</html>

