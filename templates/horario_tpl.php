<html>
<head>
	<title>Horario</title>
	<?php include 'head.php' ?>
</head>
<body>
	<?php include 'navmenu.php' ?>

	<div class="content">
		<section>
			<h2>Horario</h2>
			<hr/>
		</section>
		<div class="content_2">
			
			<div class="panel panel-default" border= "1px solid black" >
			    <div class="list-group-item list-group-item-danger" ALIGN="center" >Detalles de la clase: </div>
			    <div class="list-group-item list-group-item-info">
			    	<span >Nombre de asignatura: Matematicas</span>
			    </div>
			    <div class="list-group-item list-group-item-info">
			    	<span>Horas: 09:40 - 11:20</span>
			    </div>
			    <div class="list-group-item list-group-item-info">
			    	<span>Sala: G202</span>
			    </div>
			    <div class="list-group-item list-group-item-info">
			    	<span>Profesor: José Rojas</span>
			    </div>

			</div>
			<table class="table table-inverse" width="137px" height ="39px">
			  <thead>
			    <tr>
			      <th >Lunes</th>
			      <th >Martes</th>
			      <th >Miercoles</th>
			      <th >Jueves</th>
			      <th >Viernes</th>
			    </tr>
			  </thead>
			  <tbody >
			    <tr >
			      <td>Mat</td>
			      <td>--</td>
			      <td>--</td>
			      <td>--</td>
			      <td>Mat</td>
			    </tr>
			    <tr height ="39px">
			      <td>Ing</td>
			      <td>Dai</td>
			      <td>--</td>
			      <td>AE</td>
			      <td>Mat</td>
			    </tr>
			    <tr>
			      <td>Ingles</td>
			      <td>Dai </td>
			      <td>Dai</td>
			      <td>--</td>
			      <td>Mat</td>
			    </tr>
			    <tr>
			      <td> -- </td>
			      <td>--</td>
			      <td>--</td>
			      <td>--</td>
			      <td>--</td>
			    </tr>
			    <tr>
			      <td> -- </td>
			      <td>--</td>
			      <td>--</td>
			      <td>--</td>
			      <td>For</td>
			    </tr>
			    <tr>
			      <td>AE</td>
			      <td>--</td>
			      <td>--</td>
			      <td>--</td>
			      <td>For</td>
			    </tr>
			  </tbody>
			</table>		
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>
<style type="text/css">
	tr{
		padding: 3px;
	}
	td:hover{background-color:red;opacity: 0.5; }
	td:nth-child(2):hover{background-color: green;opacity: 0.5;}
	td:nth-child(3):hover{background-color: blue;opacity: 0.5;}
	td:nth-child(4):hover{background-color: purple;opacity: 0.5;}
	td:nth-child(5):hover{background-color: green;opacity: 0.5;}
</style>
</html>
