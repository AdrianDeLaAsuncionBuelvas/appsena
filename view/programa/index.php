<div class="panel panel-primary">
	<div class="panel-heading"> REGISTRAR PROGRAMAS </div>
	<div class="panel-body">
		<a href="?controlador=programa&accion=frmCrear"> CREAR PROGRAMA</a>
		<br/> <br/>
		<div class="row">
			<form id="frmBPro" name="frmBPro" method="post" action="?controlador=programa&accion=buscarProgramas">
				<div class="col-sm-6">
				<div class="form-group">
					<label for="codigopro"> BUSQUEDA DE PROGRAMA </label>
					<input type="search" class="form-control" id="codigopro" name="codigopro" placeholder="Digite codigo del programa" onkeypress="return event.keyCode !=13;">
				</div>
			</div>
		</form>
		     <div class="col-sm-12">
		   <div id="resultado">
	     </div>
	   </div>
	</div>
