<div class="container row col-md-12">

    <form class="form row" action="send-information.php" method="post">

        <div class="container col-lg-4 col-md-4">

            <div class="form-group">
                <label for="id"></label>
                <input type="hidden" class="form-control" id="id">
                <small id="" class=""></small>
            </div>
            <!-- This is the first column-->

            <div class="form-group">
                <label for="nactividad">Número Actividad</label>
                <input type="number" class="form-control" name="actividad" id="actividad" placeholder="actividad">
            </div>

            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
            </div>

            <div class="form-group">
                <label for="ndirector">Nombre Director</label>
                <input type="text" class="form-control" name="ndirector" id="ndirector" placeholder="Nombre del director">
            </div>

            <div class="form-group">
                <label for="uadministrativa">Unidad Administrativa</label>
                <input type="text" class="form-control" name="uadministrativa" id="uadministrativa" placeholder="Unidad Administrativa">
            </div>

            <div class="" data-toggle="buttons">
                <div class="mt-2">Tipo de solicitud</div>
                <label class="btn btn-primary active">
                    <input type="radio" name="options" id="traslado" checked> Traslado
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="options" id="redistribucion"> Redistribución
                </label>
            </div>

            <div class="form-group mt-2">
                <label for="tsolicitud">Objetivo</label>
                <textarea type="text" class="form-control" name="objetivo" id="objetivo" placeholder="Objetivo" rows="4" cols="50"></textarea>
            </div>

            <div class="form-group mt-2">
                <label for="programa">Programa</label>
                <textarea type="text" class="form-control" name="programa" id="programa" placeholder="programa" rows="4" cols="50"></textarea>
            </div>

            <div class="form-group mt-2">
                <label for="proyecto">Proyecto</label>
                <textarea type="text" class="form-control" name="proyecto" id="proyecto" placeholder="proyecto" rows="4" cols="50"></textarea>
            </div>

            <div class="form-group mt-2">
                <label for="justificacion">Justificación</label>
                <textarea type="text" class="form-control" name="justificacion" id="justificacion" placeholder="justificacion" rows="4" cols="50"></textarea>
            </div>

        </div>
        <!-- This the final the first bock -->


        <!-- This is the second block -->
        <div class="container col-lg-4 col-md-4">

            <div class="form-group mt-2">
                <label for="laccion">Línea Acción</label>
                <textarea type="text" class="form-control" name="laccion" id="laccion" placeholder="Línea de acción.." rows="4" cols="50"></textarea>
            </div>

            <div class="form-group mt-2">
                <label for="aelimina">Actividad Elimina</label>
                <textarea type="text" class="form-control" name="aelimina" id="aelimina" placeholder="Actividad Elimina.." rows="4" cols="50"></textarea>
            </div>

            <div class="form-group mt-2">
                <label for="aregistra">Actividad Registra</label>
                <textarea type="text" class="form-control" name="aregistra" id="aregistra" placeholder="Actividad Registra.." rows="4" cols="50"></textarea>
            </div>

            <div class="form-group mt-2">
                <label for="observacion">Observación</label>
                <textarea type="text" class="form-control" name="observacion" id="observacion" placeholder="Observación.." rows="4" cols="50"></textarea>
            </div>

            <div class="" data-toggle="buttons">
                <div class="mt-3 labell">Aprobado Director</div>
                <label class="btn btn-primary active">
                    <input type="radio" name="adirector" id="adirector" checked> Aprobado
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="adirector" id="adirector"> No aprobado
                </label>
            </div>

            <div class="" data-toggle="buttons">
                <div class="mt-3 labell">Aprobado Proyecto</div>
                <label class="btn btn-primary active">
                    <input type="radio" name="aproyecto" id="aproyecto" checked> Aprobado
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="aproyecto" id="aproyecto"> No Aprobado
                </label>
            </div>

            <div class="" data-toggle="buttons">
                <div class="mt-3 labell">Aprobado Presupuesto</div>
                <label class="btn btn-primary active">
                    <input type="radio" name="apresupuesto" id="apresupuesto" checked> Aprobado
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="apresupuesto" id="apresupuesto"> No Aprobado
                </label>
            </div>

            <div class="" data-toggle="buttons">
                <div class="mt-3 labell">Aprobado Jefe Planificación</div>
                <label class="btn btn-primary active">
                    <input type="radio" name="ajplanificacion" id="ajplanificacion" checked> Aprobado
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="ajplanificacion" id="ajplanificacion"> No Aprobado
                </label>
            </div>

            <div class="form-group mt-2">
                <label for="anio">Año</label>
                <input type="number" class="form-control" name="anio" id="anio" placeholder="Año.">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Envíar</button>

        </div>
        <!-- This is the last block -->
    </form>

</div>