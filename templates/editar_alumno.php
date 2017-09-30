<fieldset class="form--hidden">
    <legend>Editar Alumno</legend>
    <form id="editar-alumno" class="form-horizontal" method="post" action="ajax_update_student.php">
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Rut</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="$rut" readonly style= "width :20%">
                <!<input id="rut" name="rut" type="text" class="form-control" placeholder="Rut">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>
            <div class="col-sm-10">
                <input id="nombres" name="nombres" type="text" class="form-control" placeholder="Nombres"style= "width :25%">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Apellidos</label>
            <div class="col-sm-10">
                <input id="apellidos" name="apellidos" type="text" class="form-control" placeholder="Apellidos" style= "width :25%">
            </div>
        </div>
        <div class="form-group">
            <label for="cursos"  class="col-sm-2 control-label">Cursos :</label>
                 <select id="curso" class="form-control" name= "curso" style= "width :15%">
                    <option>192-A</option>
                    <option>192-B</option>
                    <option>292-A</option>
                    <option>292-B</option>
                    <option>392-A</option>
                    <option>392-B</option>
                    
                </select>
         </div
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Aceptar</button>
            </div>
        </div>
    </form>
</fieldset>
