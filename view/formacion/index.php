<div class="panel panel-primary">
	<div class="panel-heading"> REGISTRAR FORMACION </div>
	<div class="panel-body">
		<a href="?controlador=formacion&accion=frmCrear"> CREAR FORMACION </a>
		<br/> <br/>
		<div class="row">
			<form id="frmBform" name="frmBform" method="post" action="?controlador=formacion&accion=buscarFormacion">
				<div class="col-sm-6">
				<div class="form-group">
					<label for="codigoform"> BUSQUEDA DE FORMACION </label>
					<input type="search" class="form-control" id="codigoform" name="codigoform" placeholder="Digite codigo de la formacion" onkeypress="return event.keyCode !=13;">
				</div>
			</div>
		</form>
		<div class="col-sm-12">
		   <div id="resultado">
	   </div>
    </div>
</div>