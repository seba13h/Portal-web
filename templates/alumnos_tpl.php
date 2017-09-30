<?php 
    $grade = $_GET["curso"];
    $curses = StudentManager::findStudentsByCurse($grade);
?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'head.php' ?>
	<title>Alumnos</title>
</head>
<body>
    <div class="jumbotron alumnos">
        <h1>Alumnos</h1>
    </div>
        <form method="get" action="students.php">
            <label>Ingrese Curso</label> 
            <input type="test" id="oli" name="curso" placeholder="curso">
  
            <input type="submit" value="Consultar" class="btn btn-primary"><br /><br />
        </form>

    <table class="table table-bordered">
        <?php foreach($curses as $curse): ?>
            <tr>
                <td> <?php echo $curse->nombre ?></td>
                <td> <?php echo $curse->apellido ?></td>
                <td> <?php echo $curse->curso ?></td>
            </tr>
        <?php endforeach; ?>          

    </table>
	<?php include 'footer.php' ?>
</body>
</html>
