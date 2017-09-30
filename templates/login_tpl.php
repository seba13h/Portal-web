<html>
<head>
	<title>Administración</title>
	<?php include 'head.php' ?>
	
</head>
<body>
	<div class="contenedor-Administracion col-md-6 col-md-offset-3">
		<?php if(isset($_GET['message'])): ?>
			<div class="alert alert-danger" role="alert">
				<center>
					<?php echo $_GET['message'] ?>
				</center>
			</div>
		<?php endif; ?>
		<form class="form-horizontal" method="post" action="authenticate.php">
	  		<div class="form-group">
	    		<label for="name" class="col-sm-2 control-label">Usuario</label>
	    		<div class="col-sm-10">
	      			<input type="text" id="name" class="form-control" placeholder="Usuario" name="name">
	    		</div>
	  		</div>
	 		<div class="form-group">
	    		<label for="pass" class="col-sm-2 control-label">Contraseña</label>
	    		<div class="col-sm-10">
	      			<input type="password" id="pass" class="form-control" placeholder="Contraseña" name="pass">
	    		</div>
	  		</div>
	  		<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-10">
	      			<button type="submit" class="btn btn-primary">Ingresar</button>
	    		</div>
	  		</div>
		</form>
	</div>
</body>
</html>
