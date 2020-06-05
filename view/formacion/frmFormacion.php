<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <li><a class="navbar-brand ">LISTADO DE FORMACION</a></li>

</div>
</div>
</nav>
<div class="row">
	<form method="post" action="?controlador=formacion&accion=crear">
      <div class="col-sm-4">
					<div class="form-group">
		<label for="pro">Programa</label><br />
	     <select class="btn btn-default dropdown-toggle" id="pro" name="pro">
			<?php foreach ($datos as $v) {
		 echo '<option value="'.$v['PRO_ID'].'">'.$v['PRO_NOMBRE'].'</option>';
			}?>
		  </select>
             </div>
              <div class="form-group">
         	  <label for="nom">Nombre Formacion:</label>
              	<input type="text" class="form-control" id="nom" name="nom" required>
	               </div>
	            	<div class="form-group">
	      		   <label for="cod">Codigo Formacion:</label>
		    	   <input type="number" class="form-control" id="cod" name="cod" required>
	            	</div>
		            <input type="submit" class="btn btn-info" name="aceptar" value="Registrar">
	                </div>
	             	   <div class="col-sm-4">
			    	<div class="form-group">
			      <label for="fchinc">Fecha Inicio:</label>
			     <input type="date" class="form-control" id="fchinc" name="fchinc" required>
		        </div>
				<div class="form-group">
			<label for="fchfin">Fecha Fin:</label>
			<input type="date" class="form-control" id="fchfin" name="fchfin" required>
		   </div>
	    </div>
	</form>
  </div>
 </div>
</div>
