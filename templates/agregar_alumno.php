<fieldset class="form--hidden">
    <legend>Agregar alumno</legend>
    <form id="agregar-alumno" class="form-horizontal" method="POST" action="ajax_add_student.php">
        <div class="form-group">
            <label for="nombres" class="col-sm-2 control-label">Nombres</label>
            <div class="col-sm-10">
                <input id="nombres" type="text" class="form-control" placeholder="Nombres" name="nombres">
            </div>
        </div>
        <div class="form-group">
            <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
            <div class="col-sm-10">
                <input id="apellidos" type="text" class="form-control" placeholder="Apellidos" name="apellidos">
            </div>
        </div>
        <div class="form-group">
            <label for="curso" class="col-sm-2 control-label">Curso</label>
            <div class="col-sm-10">
                <input id="curso" type="text" class="form-control" placeholder="Curso" name="curso">
            </div>
        </div>
        <div class="form-group">
            <label for="rut" class="col-sm-2 control-label">Rut</label>
            <div class="col-sm-10">
                <input id="rut" type="text" class="form-control" placeholder="Rut" name="rut">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Aceptar</button>
            </div>
        </div>
    </form>
</fieldset>

