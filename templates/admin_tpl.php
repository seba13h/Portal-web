<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include 'head.php' ?>
</head>
<body>
	<aside>
        <a href="login.php"><button type="button" class="btn btn-default cerrar-sesion" onclick="logOut()">Cerrar Sesion</button></a>
    </aside>
    <h1>Listado de alumnos</h1>
    <button class="btn btn-primary" onclick="mostrarPanel('agregar-alumno')">Agregar Alumno</button><br><br>

    <?php include 'agregar_alumno.php' ?>
    <?php include 'editar_alumno.php' ?>

    <table id="agregar-alumno" class="table table-bordered">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Curso</th>
                <th>Rut</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0; 
            foreach($students as $student): ?>
            <tr>
                <td> <?php echo $student->nombre ?></td>
                <td> <?php echo $student->apellido ?></td>
                <td> <?php echo $student->curso ?></td>
                <td> <?php echo $student->rut ?></td>
                <td>
                    <button class="glyphicon glyphicon-pencil" onclick="mostrarPanel('editar-alumno')"></button>
                    <a href="ajax_delete_student.php?rut=<?php echo $student->rut; ?>" ><button class="glyphicon glyphicon-trash" name="rut"></button></a>
                </td>
            </tr>
            <?php $count = $count + 1; ?>
        <?php endforeach; ?>
        </tbody>
    </table>

        <script type="text/javascript">
            function mostrarPanel(id){
                $("fieldset").addClass("form--hidden");
                $( "#" + id).closest('fieldset').removeClass("form--hidden");

            }
            function agregarAlumno(){
                var foo = $("#agregar-alumno").serialize();
                $.post('/maintainer_students/ajax_add_student.php', foo ,function unnamed(data){
                   /* console.log(data);*/
                    var html = [
                        "<tr>",
                            "<td>hh </td>",
                            "<td>hh </td>",
                            "<td>hh </td>",
                            "<td>hh </td>",
                            '<td><button class="glyphicon glyphicon-pencil" onclick="mostrarPanel(\'editar-alumno\')"></button>' ,
                    '  <button class="glyphicon glyphicon-trash" onclick=""></button> </td>',
                        "</tr>"
                    ].join("");

                    $("#agregar-alumno tbody").append(this.data);
                    location.reload();
                });

                return false;
            }

            function logOut(){
                $.get("templates/logOut.php");
                return false;
            }
        </script>

    <!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a id="parrafo-acordeon" class="btn btn-primary btn-lg btn-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Agregar Alumno
                </a>
            </h4>
            </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a id="parrafo-acordeon" class="btn btn-primary btn-lg btn-block" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Editar Alumno
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingrese curso o rut">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a id="parrafo-acordeon" class="btn btn-primary btn-lg btn-block" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Eliminar Alumno
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingrese curso o rut">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </div>
    </div>
    </div>
    </div>
-->
</body>
</html>
