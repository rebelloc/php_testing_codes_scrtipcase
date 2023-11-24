<div class="row container col-md-12">
   <table class="table stripped mt-4">
      <thead>
        <tr>
            <th>Número de actividad</th>    
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
            <th>año</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        
        </tr>
      </thead>
      <tbody>
        <?php foreach($rsp as $rs) { ?>
        <tr>
            <td><?php echo $rs['numeroActividad'] ?></td>
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
            <td><?php echo $rs['anio'] ?></td>
            <td><button class="btn btn-warning">Update</button</td>
            <td><button class="btn btn-warning">Delete</button</td>
        </tr>
        <?php } ?>  
      </tbody>
    </table>
</div>