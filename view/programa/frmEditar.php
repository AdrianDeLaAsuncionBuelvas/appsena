<div class="row">
<form  id="frmEdPro" method="post" action="?controlador=programa&accion=editar">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="nombre"> NOMBRE </label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $r['PRO_NOMBRE'] ;?>">
		</div>
		<div class="form-group">
			<label for="codigo"> CODIGO </label>
			<input type="number" class="form-control" id="codigo" name="codigo" value="<?php echo $r['PRO_CODIGO'] ;?>">
		</div>
		<input type="submit" class="btn btn-info" value="ACEPTAR" name="aceptar">
		<input type="hidden" name="id" value="<?php echo $r['PRO_ID'] ;?>">
	</div>
	</form>
</div>