<?php 
   header('Content-Type: text/html; charset=utf-8');
   include 'connection/crudClass.php';
   $response = new crudClass();
   $rsp = $response->selectFunction();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
          .main-form{
             padding-top: 50px; 
             padding-left: 50px;
             padding-bottom: 50px; 
             padding-right: 50px;
             /* background-color: yellow; */
          }
    </style>
</head>
<body>
<div class="col-md-12 main-form">
   <div class="mt-4">
   <form class="form">
    <div class="form-group">
        <label for="id"></label>
        <input type="hidden" class="form-control" id="id">
        <small id="" class=""></small>
    </div>
    <div class="form-group">
        <label for="actividad">Actividad</label>
        <input type="text" class="form-control" id="actividad" placeholder="actividad">
    </div>
    <div class="form-group mt-2">
        <label for="actividad">Actividad description</label>
        <textarea type="text" class="form-control" id="actividad" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2"></button>
    </form>
   </div>

<!-- Where the table is goning printing --->

   <div class="col-md-12">
   <table class="table stripped mt-4">
      <thead>
        <tr>
            <th>Número de actividad</th>
            <th>año</th>
            <th>Fecha</th>
            <th>Nombre Director</th>
            <th>Unidad Administrativa</th>
            <th>Tipo solicitud</th>
            <th>Objetivo</th>
            <th>Programa</th>
            <th>Proyecto</th>
            <th>Justificación</th>
            <th>Linea Acción</th>
            <th>Actividad Elimina</th>
            <th>actividadRegistra</th>
            <th>Observación</th>
            <th>aprobadoDirector</th>
            <th>aprobadoProyecto</th>
            <th>aprobadoPresupuesto</th>
            <th>aprobadoJefePlanif</th>
            <th>totalAumenta</th>
            <th>totalDisminuye</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        
        </tr>
      </thead>
      <tbody>
        <?php foreach($rsp as $rs) { ?>
        <tr>
            <td><?php echo $rs['numeroActividad'] ?></td>
            <td><?php echo $rs['anio'] ?></td>
            <td><?php echo $rs['fecha'] ?></td>
            <td><?php echo $rs['nombreDirector'] ?></td>
            <td><?php echo $rs['unidadAdministrativa'] ?></td>
            <td><?php echo $rs['tipoSolicitud'] ?></td>
            <td><?php echo mb_convert_encoding($rs['objetivo'], 'UTF-8', 'ISO-8859-1'); ?></td>
            <td><?php echo mb_convert_encoding($rs['programa'], 'UTF-8', 'ISO-8859-1'); ?></td>
            <td><?php echo mb_convert_encoding($rs['proyecto'], 'UTF-8', 'ISO-8859-1'); ?></td>
            <td><?php echo mb_convert_encoding($rs['justificacion'], 'UTF-8', 'ISO-8859-1'); ?></td>
            <td><?php echo $rs['LineaAccion'] ?></td>
            <td><?php echo $rs['actividadElimina'] ?></td>
            <td><?php echo mb_convert_encoding($rs['actividadRegistra'], 'UTF-8', 'ISO-8859-1'); ?></td>
            <td><?php echo mb_convert_encoding($rs['observacion'], 'UTF-8', 'ISO-8859-1'); ?></td>
            <td><?php echo $rs['aprobadoDirector'] ?></td>
            <td><?php echo $rs['aprobadoProyecto'] ?></td>
            <td><?php echo $rs['aprobadoPresupuesto'] ?></td>
            <td><?php echo $rs['aprobadoJefePlanif'] ?></td>
            <td><?php echo $rs['totalAumenta'] ?></td>
            <td><?php echo $rs['totalDisminuye'] ?></td>
            <td><button class="btn btn-warning">Update</button</td>
            <td><button class="btn btn-warning">Delete</button</td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>