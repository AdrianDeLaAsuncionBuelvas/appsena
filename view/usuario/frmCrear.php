<div class="row">
	<div class="col-sm-8">
<div class="panel panel-primary">
	<div class="panel-heading"> REGISTRARSE </div>
	<div class="panel-body">
		<div class="row">
			<form method="post" action="?controlador=usuario&accion=crear">
				<div class="col-sm-5">
					<div class="form-group">
						<label for="nombres"> NOMBRES </label>
						<input type="text" class="form-control" id="nombres" name="nombres">
						</div>
						<div class="form-group">
							<label for="tp"> TIPO DOCUMENTO </label>
							<select class="form-control" id="tp" name="tp">
								<option value="1"> CC </option>
								<option value="2"> TI </option>
								<option value="3"> CE </option>
							</select>
						</div>
						<div class="form-group">
							<label for="apellidos"> CORREO </label>
							<input type="text" class="form-control" id="correo" name="correo">
						</div>
						<input type="submit" class="btn btn-info" value="ACEPTAR" name="aceptar">
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label for="apellidos"> APELLIDOS </label>
							<input type="text" class="form-control" id="apellidos" name="apellidos">
						</div>
						<div class="form-group">
							<label for="ndoc"> NUMERO DOCUMENTO </label>
							<input type="number" class="form-control" id="ndoc" name="ndoc">
						</div>
						<div class="form-group">
							<label for="fch"> FECHA NACIMIENTO </label>
							<input type="date" class="form-control" id="fch" name="fch">
						</div>
						<div class="form-group">
							<label for="rol"> ROL </label>
							<select class="form-control" id="rol" name="rol">
								<option value="1"> ADMINISTRATIVO </option>
								<option value="2"> CLIENTE </option>
								<option value="3"> USUARIO </option>
							</select>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div></div>