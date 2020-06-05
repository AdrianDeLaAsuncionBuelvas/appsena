<div class="row">
<form id="frmEdFor"  method="post" action="?controlador=formacion&accion=editar">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="nombre"> NOMBRE </label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $r['FOR_NOMBRE'];?>">
		</div>
		<div class="form-group">
			<label for="codigo"> CODIGO </label>
			<input type="number" class="form-control" id="codigo" name="codigo" value="<?php echo $r['FOR_CODIGO'];?>">
		</div>
		<input type="submit" class="btn btn-info" value="ACEPTAR" name="aceptar">
		<input type="hidden"  name="id" value="<?php echo $r['FOR_ID'];?>">
	</div>
	</form>
</div>