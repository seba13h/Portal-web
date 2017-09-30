<div><!-- HEADER -->
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="index.php">Inicio </a>
	  <a href="perfil.php">Perfil</a>
	  <a href="notas.php">Notas</a>
	  <a href="horario.php">Horario</a>
	  <a href="eventos.php">Eventos</a>
	  <a href="ajustes.php">Ajustes</a>
	  <a href="cursos.php">Cursos</a>
	</div>

	<span style="font-size:30px;cursor:pointer;display: inline;" onclick="openNav()">&#9776;</span>
	<span style="font-size:30px;display: inline;" >MENU</span>
</div>

<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "30%";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	}
</script>

<style type="text/css">
	.sidenav {
	    height: 100%;
	    width: 0;
	    position: fixed;
	    z-index: 1;
	    top: 0;
	    left: 0;
	    background-color: #111;
	    overflow-x: hidden;
	    transition: 0.5s;
	    padding-top: 60px;
	}

	.sidenav a {
	    padding: 8px 8px 8px 32px;
	    text-decoration: none;
	    font-size: 25px;
	    color: #818181;
	    display: block;
	    transition: 0.3s;
	}

	.sidenav a:hover {
	    color: #f1f1f1;
	    background-color: green;
	}

	.sidenav .closebtn {
	    position: absolute;
	    top: 0;
	    right: 25px;
	    font-size: 36px;
	    margin-left: 50px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
</style>