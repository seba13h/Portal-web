<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include 'head.php' ?>
</head>
<body>
	<aside>
        <button type="button" class="btn btn-default cerrar-sesion" onclick="logOut()">Cerrar Sesion</button>
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
                let foo = $("#agregar-alumno").serialize();
                $.post('maintainer_students/ajax_add_student.php', foo ,(data) => {
                    let html = [
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
                });

                return false;
            }

            function logOut(){
                $.get("templates/logOut.php");
                return false;
            }
        </script>

</body>
</html>
