<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $tarea->idTarea ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Tarea </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=tarea&method=update"  method="post">
	
								<input type="hidden" name="idTarea" 
								value="<?php echo $tarea->idTarea ?>">
	
									<div class="form-group">
										<label>Solicitud Tarea</label>
										<input type="text"  name="solicitudTarea" class="form-control"  
										value="<?php echo $tarea->solicitudTarea ?>">
									</div>
                                    <div class="form-group">
										<label>Descripcion Tarea</label>
										<input type="text"  name="descripcionTarea" class="form-control"  
										value="<?php echo $tarea->descripcionTarea ?>">
									</div>
									
				<div>
					<label>Servicio Cambio</label>
					 <select name="idCambio" class="form-control">
						 <option value="">Seleccione</option>
								<?php
									foreach ($cambios as $cambio) 
							{
									 if ($cambio->idCambio == $tarea->idCambio)
										{
								?>
											<option selected value="<?php echo $cambio->idCambio ?>"><?php echo $cambio->servicioCambio?></option>
								<?php
										} else {
								?>
												 <option  value="<?php echo $cambio->idCambio ?>"><?php echo $cambio->servicioCambio?></option>			
								<?php
											 }
							}
								?>
					 </select>
				</div>
                <div>
					<label>Incidencia</label>
					 <select name="idIncidente" class="form-control">
						 <option value="">Seleccione Tipo de Incidencia</option>
								<?php
									foreach ($incidencias  as $incidencia) 
							{
									 if ($incidencia->idIncidente == $tarea->idIncidente)
										{
								?>
											<option selected value="<?php echo $incidencia->idIncidente ?>"><?php echo $incidencia->descripcionIncidentes?></option>
								<?php
										} else {
								?>
												 <option  value="<?php echo $incidencia->idIncidente ?>"><?php echo $incidencia->descripcionIncidentes?></option>			
								<?php
											 }
							}
								?>
					 </select>
				</div>
                <div>
					<label>Estado</label>
					 <select name="idEstado" class="form-control">
						 <option value="">Seleccione Tipo de Estado</option>
								<?php
									foreach ($estados  as $estado) 
							{
									 if ($estado->idEstado == $tarea->idEstado)
										{
								?>
											<option selected value="<?php echo $estado->idEstado ?>"><?php echo $estado->nombreEstado?></option>
								<?php
										} else {
								?>
												 <option  value="<?php echo $estado->idEstado ?>"><?php echo $estado->nombreEstado?></option>			
								<?php
											 }
							}
								?>
					 </select>
				</div>
				
									
														
						 <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button class="btn btn-primary">Actualizar</button>
						 
							</form>		
	
	
						</div>
					</div>
				</div>
			</div>
	
	</section>
	</main>
		



</body>
</html>

