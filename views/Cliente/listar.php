<div id="barraBotones" class="btn-group btn-group-lg" role="group">
  <button title="Actualizar" id="actualizarclientes" name="actualizarclientes" class="btn btn-info">
  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
  </button>
  <button title="Editar" id="editarclientes" name="editarclientes" class="btn btn-success">
  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
  </button>
  <button title="Eliminar" id="eliminarclientes" name="eliminarclientes" class="btn btn-danger">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
  </button>
</div>
<table class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th></th>
      <th>#</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>CURP</th>
      <th>Teléfono</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php $datos = $this->getDatos();foreach ($datos as $key => $cliente):?>
    <tr>
      <?php $incremento=0; $incremento2=1?>
      <td><input type="checkbox" name="checkboxes" id="checkboxes-<?php echo $incremento;?>" value="<?php echo $incremento2;?>"></td>
      <td><?php echo $cliente->id_cliente;?></td>
      <td><?php echo $cliente->nombre;?></td>
      <td><?php echo $cliente->apellidos;?></td>
      <td><?php echo $cliente->curp;?></td>
      <td><?php echo $cliente->telefono;?></td>
      <td><?php echo $cliente->email;?></td>
    </tr>
    <?php $incremento++; $incremento2++; endforeach; ?>
  </tbody>
</table>