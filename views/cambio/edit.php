<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $cambio->idCambio ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Cambio </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=cambio&method=update"  method="post">
	
								<input type="hidden" name="idCambio" 
								value="<?php echo $cambio->idCambio ?>">
	
									<div class="form-group">
										<label>Servicio Cambio</label>
										<input type="text"  name="servicioCambio" class="form-control"  
										value="<?php echo $cambio->servicioCambio ?>">
									</div>
                                    <div class="form-group">
										<label>Resumen Cambio</label>
										<input type="text"  name="resumenCambio" class="form-control"  
										value="<?php echo $cambio->resumenCambio ?>">
									</div>
                                    <div class="form-group">
										<label>Prioridad Cambio</label>
										<input type="text"  name="prioridad" class="form-control"  
										value="<?php echo $cambio->prioridad ?>">
									</div>
				
            
                <div>
					<label>Estado</label>
					 <select name="idEstado" class="form-control">
						 <option value="">Seleccione Tipo de Estado</option>
								<?php
									foreach ($estados  as $estado) 
							{
									 if ($estado->idEstado == $cambio->idEstado)
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

