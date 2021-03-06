<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TAR MSAN ENERO 04 AL 18 CRQ000000068728</title>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/modal.css">

<style>
    #btn{
        
        margin-left: 900px;
        margin-top: 2px;
    }
    
</style>




<!-- Google Font: Source Sans Pro -->
</head>
<body class="hold-transition sidebar-mini">

 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" >TAR MSAN ENERO 04 AL 18</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">TAR MSAN</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-wrench"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Cambio</span>
                <span class="info-box-number">
                  CRQ000000068728
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Exitosas</span>
                <span class="info-box-number">41,410 %</span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times-circle"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Canceladas</span>
                <span class="info-box-number">5 %</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

         
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        
      </div><!--/. container-fluid -->


    </section>
    <!-- /.content -->
   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              
			        <button id="btn" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fa fa-window-restore"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="data" class="display responsive nowrap" style="width:100%">
        <thead>

        					
            <tr>
                <th># Tarea</th>
                <th>Predio</th>
                <th>Nemonico</th>
                <th>Direccion</th>
                <th>Tipo de Instalacion</th>
                <th>Fecha De Acctividad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($EneM1s as $EneM1) : ?>
            <tr>
                <td><?php echo $EneM1->idRemedy?></td>
                <td><?php echo $EneM1->NOMBREPREDIO?></td>
                <td><?php echo $EneM1->NEMONICOEQUIPO?></td>
                <td><?php echo $EneM1->DIRECCIONPREDIO?></td>
                <td><?php echo $EneM1->TIPODEINSLACION?></td>
                <td><?php echo $EneM1->fecha?></td>
                <td>


                  <a type="button" data-toggle="modal"  data-target="#exampleModal<?php echo $EneM1->idRemedy?>" href="?controller=tarea&method=edit&idTarea=<?php
                  echo $EneM1->idRemedy?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
                  
                  <a href="?controller=tarea&method=delete&idTarea=
                      <?php echo $tarea->idTarea?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                </td>
                
            </tr>

              <?php endforeach?>
        </tbody>
    </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->    
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
        <!-- /.row -->
        
        <!-- /.row -->
       
        <!-- /.row -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
            
            <?php
              foreach ($EneM1s as $EneM1) :
                include 'edit.php'
            ?>

            <?php
              endforeach
            ?>

    <section>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Nueva Tarea</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span onclick="window.location.href='?controller=tarea'"   aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				        <form action="?controller=tarea&method=save" method="post" onsubmit="return validarArea();">
										<div class="form-group">
                      <label>Solicitud Tarea</label>
                      <textarea class="form-control" rows="3" id="solicitudTarea" name="solicitudTarea" placeholder="Solicitud de la Tarea"  required></textarea>
										</div>
										<div class="form-group">
											<label>Descripcion Tarea</label>
										
											<textarea class="form-control" rows="3" id="descripcionTarea" name="descripcionTarea" placeholder="Descripcion de la Tarea"  required></textarea>
										</div>
										
								<div>
									<label>Tipo Servicio.</label>
									 <select id="idCambio" name="idCambio" class="form-control" required>
										 <option value="">Seleccione Servicio Cambio</option>
										  	<?php
												  foreach ($cambios  as $cambio) 
											{
													 if ($cambio->idCambio == $data[0]->idCambio)
													  {
												?>
															<option selected value="<?php echo $cambio->idCambio ?>"><?php echo $cambio->idCambio?></option>
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
									<label>Incidencia.</label>
									 <select id="idIncidente" name="idIncidente" class="form-control" required>
										 <option value="">Seleccione Tipo de Incidencia</option>
										  	<?php
												  foreach ($incidencias  as $incidencia) 
											{
													 if ($incidencia->idIncidente == $data[0]->idIncidente)
													  {
												?>
															<option selected value="<?php echo $incidencia->idIncidente ?>"><?php echo $incidencia->idIncidente?></option>
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
                
												
				      <div class="modal-footer">
				      	<input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=tarea'" /> 
				       	<input type="submit" value="Guardar" class="btn btn-success">
				        </form>		
				      </div>
				    </div>
				  </div>
				</div>
	</section>
  </div>

  <!-- Content Wrapper. Contains page content -->
 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function() {
    tablaOfertaCambioIdioma();
} );

function tablaOfertaCambioIdioma(){

	$('#data').DataTable({

		  "language": {
      "emptyTable":     "<i>No hay datos disponibles en la tabla.</i>",
      "info":         "Del _START_ al _END_ de _TOTAL_ ",
      "infoEmpty":      "Mostrando 0 registros de un total de 0.",
      "infoFiltered":     "(filtrados de un total de _MAX_ registros)",
      "infoPostFix":      "(actualizados)",
      "lengthMenu":     "Mostrar _MENU_ registros",
      "loadingRecords":   "Cargando...",
      "processing":     "Procesando...",
      "search":     "<span style='font-size:15px;'>Buscar:</span>",
      "searchPlaceholder":    "Dato para buscar",
      "zeroRecords":      "No se han encontrado coincidencias.",
      "paginate": {
        "first":      "Primera",
        "last":       "??ltima",
        "next":       "Siguiente",
        "previous":     "Anterior"
      },
      "aria": {
        "sortAscending":  "Ordenaci??n ascendente",
        "sortDescending": "Ordenaci??n descendente"
      }
    },

     "lengthMenu":   [[15,5,7, 10, 20, 25, 50, -1], [3,5,7, 10, 20, 25, 50, "Todos"]],
    "iDisplayLength": 15,

	});
    }
    </script>
</body>
</html>
