<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $user->idUsuario ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Usuario </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=user&method=update"  method="post">
	
								<input type="hidden" name="idUsuario" 
								value="<?php echo $user->idUsuario ?>">
	
									<div class="form-group">
										<label>Nombre Usuario</label>
										<input type="text"  name="nombresUsuario" class="form-control"  
										value="<?php echo $user->nombresUsuario ?>">
									</div>
                                    <div class="form-group">
										<label>Descripcion Tarea</label>
										<input type="text"  name="apellidosUsuario" class="form-control"  
										value="<?php echo $user->apellidosUsuario ?>">
									</div>
                                    <div class="form-group">
										<label>Correo Usuario</label>
										<input type="text"  name="correoUsuario" class="form-control"  
										value="<?php echo $user->correoUsuario ?>">
									</div>
									
                <div>
					<label>Cargo</label>
					 <select name="idCargo" class="form-control">
						 <option value="">Seleccione Nuevo Cargo</option>
								<?php
									foreach ($cargos  as $cargo) 
							{
									 if ($cargo->idCargo == $user->idCargo)
										{
								?>
											<option selected value="<?php echo $cargo->idCargo ?>"><?php echo $cargo->nombreCargo?></option>
								<?php
										} else {
								?>
												 <option  value="<?php echo $cargo->idCargo ?>"><?php echo $cargo->nombreCargo?></option>			
								<?php
											 }
							}
								?>
					 </select>
				</div>
                <div>
					<label>Estado</label>
					 <select name="idEstado" class="form-control">
						 <option value="">Seleccione Tipo de Incidencia</option>
								<?php
									foreach ($estados  as $estado) 
							{
									 if ($estado->idEstado == $user->idEstado)
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

