<div id="barraBotones"class="btn-group btn-group-lg" role="group">
  <button title="Actualizar" id="actualizarpeticiones" name="actualizarpeticiones" class="btn btn-info">
  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
  </button>
  <button title="Editar" id="editarpeticiones" name="editarpeticiones" class="btn btn-success">
  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
  </button>
  <button title="Eliminar" id="eliminarpeticiones" name="eliminarpeticiones" class="btn btn-danger">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
  </button>
</div>
<table class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th></th>
      <th>#</th>
      <th>Resumen</th>
      <th>Estado</th>
      <th>Fecha Recepci&oacute;n</th>
      <th>Fecha Inicio</th>
      <th>Fecha Finalizaci&oacute;n</th>
      <th>Tiempo Empleado</th>
    </tr>
  </thead>
  <tbody>
    <?php $datos = $this->getDatos();foreach ($datos as $key => $peticion):?>
    <tr>
      <?php $incremento=0; $incremento2=1?>
      <td><input type="checkbox" name="peticiones[]" id="peticion-<?php echo $incremento;?>" value="<?php echo $referencia;?>"></td>
      <td><?php echo $peticion->referencia;?></td>
      <td><?php echo $peticion->resumen;?></td>
      <td><?php echo $peticion->estado;?></td>
      <td><?php echo $peticion->fecha_recepcion;?></td>
      <td><?php echo $peticion->fecha_inicio;?></td>
      <td><?php echo $peticion->fecha_finalizacion;?></td>
      <td><?php echo $peticion->tiempo_empleado;?></td>
    </tr>
    <?php $incremento++; $incremento2++; endforeach; ?>
  </tbody>
</table>