<div class="col-md-12 main-form">
   <form class="form" action="send-information.php" method="post">
    <div class="form-group">
        <label for="id"></label>
        <input type="hidden" class="form-control" id="id">
        <small id="" class=""></small>
    </div>

    <div class="form-group">
        <label for="nactividad">Número Actividad</label>
        <input type="number" class="form-control" name="actividad" id="actividad" placeholder="actividad">
    </div>
 
    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="fecha" placeholder="actividad">
    </div>

    <div class="form-group">
        <label for="ndirector">Nombre Director</label>
        <input type="text" class="form-control" id="actividad" placeholder="actividad">
    </div>

    <div class="form-group">
        <label for="uadministrativa">Unidad Administrativa</label>
        <input type="text" class="form-control" id="actividad" placeholder="actividad">
    </div>
  
    <div class="" data-toggle="buttons"> 
        <div class="mt-2">Tipo de solicitud</div>
        <label class="btn btn-primary active">
            <input type="radio" name="options" id="option1" checked> Traslado
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options" id="option2"> Redistribución
        </label>
    </div>

    <div class="form-group mt-2">
        <label for="tsolicitud">Objetivo</label>
        <textarea type="text" class="form-control" id="tsolicitud" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>

    <div class="form-group mt-2">
        <label for="tsolicitud">Programa</label>
        <textarea type="text" class="form-control" id="tsolicitud" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>

    <div class="form-group mt-2">
        <label for="tsolicitud">Proyecto</label>
        <textarea type="text" class="form-control" id="tsolicitud" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>

    <div class="form-group mt-2">
        <label for="tsolicitud">Justificación</label>
        <textarea type="text" class="form-control" id="tsolicitud" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>

    <div class="form-group mt-2">
        <label for="tsolicitud">Línea Acción</label>
        <textarea type="text" class="form-control" id="tsolicitud" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>

    <div class="form-group mt-2">
        <label for="tsolicitud">Actividad Elimina</label>
        <textarea type="text" class="form-control" id="tsolicitud" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>

    <div class="form-group mt-2">
        <label for="tsolicitud">Actividad Registra</label>
        <textarea type="text" class="form-control" id="tsolicitud" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>

    <div class="form-group mt-2">
        <label for="tsolicitud">Observación</label>
        <textarea type="text" class="form-control" id="tsolicitud" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>

    <div class="" data-toggle="buttons"> 
        <div class="mt-3 labell">Aprobado Director</div>
        <label class="btn btn-primary active">
            <input type="radio" name="options" id="option1" checked> Aprobado
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options" id="option2"> No aprobado
        </label>
    </div>

    <div class="" data-toggle="buttons"> 
        <div class="mt-3 labell">Aprobado Proyecto</div>
        <label class="btn btn-primary active">
            <input type="radio" name="options" id="option1" checked> Aprobado
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options" id="option2"> No Aprobado
        </label>
    </div>

    <div class="" data-toggle="buttons"> 
        <div class="mt-3 labell">Aprobado Presupuesto</div>
        <label class="btn btn-primary active">
            <input type="radio" name="options" id="option1" checked> Aprobado
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options" id="option2"> No Aprobado
        </label>
    </div>

    <div class="" data-toggle="buttons"> 
        <div class="mt-3 labell">Aprobado Jefe Planificación</div>
        <label class="btn btn-primary active">
            <input type="radio" name="options" id="option1" checked> Aprobado
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options" id="option2"> No Aprobado
        </label>
    </div>

    <div class="form-group mt-2">
        <label for="anio">Año</label>
        <input type="text" class="form-control" id="actividad" placeholder="actividad">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Envíar</button>
    </form>
</div>