<?php
    //require_once 'header.php';
    require_once 'clases/usuario.php';
    use app\clases\usuario;
    $obj_usuario = new usuario(1,1,1,1); // 
    
    //https://disenowebakus.net/llevando-datos-de-las-paginas-php-a-la-base-mysql.php

?>
<script>
    function realizaProceso(valorCaja1, valorCaja2){

        $.ajax({
                data:{clave: valorCaja1, nombre: valorCaja2}
                url:   'ajaxUsuario.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
    }
</script>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CoRGraN - Mi cuenta</title>

    <meta name="description" content="Sitio web del Colegio Rionegrino de graduados en nutrición">
    <meta name="author" content="Slamcoop - VSoft">
    <meta name="robot" content="noindex, nofollow">

    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/stellarnav.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/stellarnav.min.js"></script>
    <!-- <script type="text/javascript" src="js/scripts.js"></script> --> 
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="miscript.js"></script>
    
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" id="form_usuario" method="post" action="\clases\usuario.php">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
					    Nombre
					</label>
					<input id="nombre" type="text" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Clave
					</label>
					<input id="clave" type="password" class="form-control" id="exampleInputPassword1" />
					
				</div>
				<div class="form-group">
    			    <label for="exampleInputPassword1">
    						Tipo usuario
    				</label>
                    <div class="btn-group">
                          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Seleccionar
                          </button>
                          <div class="dropdown-menu">
                              <a name="a" class="dropdown-item" href="#">Colegiado</a>
                              <a name="a"class="dropdown-item" href="#">Administrador</a>
                              <a name="a"class="dropdown-item" href="#">Tesorero</a>
                          </div>
                    </div>
                </div>
                <input type="button" href="javascript:;" onclick="realizaProceso($('#clave').val(), $('#nombre').val());return false;" value="Guardar"/>
				<button type="submit" class="btn btn-primary" id="guardarUsu">
					Guardar
				</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>