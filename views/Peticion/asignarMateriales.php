		<div id="barraBotones"class="btn-group btn-group-lg" role="group">
			<button title="Actualizar" id="actualizarmateriales" name="actualizarmateriales" class="btn btn-info">
			<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
			</button>
			<button title="Editar" id="editarmateriales" name="editarmateriales" class="btn btn-success">
			<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
			</button>
			<button title="Eliminar" id="eliminarmateriales" name="eliminarmateriales" class="btn btn-danger">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			</button>
		</div>
<div class="row">	
	<div class="col-md-6">
		<select name="peticiones" id="peticiones" class="form-control">
			<?php $datos = $this->getDatos();foreach ($datos as $key => $peticion):?>
			<option value="<?php echo $peticion->referencia;?>"><?php echo $peticion->fecha_recepcion?></option>
			<?php endforeach;?>
		</select>
	</div>
</div>

<div class="col-md-12">
<table class="tablepad table table-striped table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th></th>
      <th>#</th>
      <th>Tipo</th>
      <th>Descripción</th>
      <th>Costo</th>
    </tr>
  </thead>
  <tbody>
    <?php $datos = $this->getDatos();foreach ($datos as $key => $material):?>
    <tr>
      <?php $incremento=0; $incremento2=1?>
      <td><input type="checkbox" name="checkboxes" id="checkboxes-<?php echo $incremento;?>" value="<?php echo $incremento2;?>"></td>
      <td><?php echo $material->id_material;?></td>
      <td><?php echo $material->tipo;?></td>
      <td><?php echo $material->descripcion;?></td>
      <td><?php echo $material->costo;?></td>
    </tr>
    <?php $incremento++; $incremento2++; endforeach; ?>
  </tbody>
</table>
</div>