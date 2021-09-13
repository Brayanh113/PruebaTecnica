<?php
include "../Controlador/controladorPersonas.php";
$listarPersonas = $controladorPersonas->listarPersonas();
$listarEdad = $controladorPersonas->listarMayores()
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prueba Tecnica</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css">
	<!-- CSS only -->


</head>
<body>
	<br>
	<div>
		<h2 style="text-align: center">Prueba Técnica</h2>
	</div>
	<br>
	<div class="row">
		<table id="tabla" class="table table-striped" style="width:100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Edad</th>
				<th>Telefono</th>
				<th>Celular</th>
				<th>Cuidad</th>
				<th>Dirección</th>
				<th>Hijos</th>
				<th># Hijos</th>
				<th>IdPadres</th>
				<th>Acciones</th>
			</tr>
		</thead>
			<tbody>
				<?php
				$cont=0;
				foreach ($listarPersonas as $listar) {	

				?>
				<tr>
					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['id']?></button></td>

					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['nombre']?></button></td>

					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['apellido']?></button></td>

					<td ><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['edad']?></button></td>

					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['telefono']?></button></td>

					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['celular']?></button></td>

					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['ciudad']?></button></td>

					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['direccion']?></button></td>

					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php if ($listar['hijos']== 0) {
						echo "No";
					} else {
						echo "Si";
					} 
					?></button></td>
					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['n_hijos']?></button></td>

					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"><?php echo $listar['idPadres']?></td>

					<td><button <?php $id = $cont++ ?> id="<?php echo $id?>"type="button" style="width:100%" onclick="cambiarcolor(<?php echo $id?>)"> ver</button></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>

		
	</div> 

	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <table id="tabla" class="table table-striped" style="width:100%">
	        	<thead>
	        		<tr>
	        			<th>Nombre</th>
	        			<th>Edad</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        		<?php
	        		foreach ($listarEdad as $edad) {
	        		 ?>
	        		<tr>
	        			<td><?php echo $edad['nombre'] ?></td>
	        			<td><?php echo $edad['edad'] ?></td>
	        		</tr>

	        		<?php 
	        		}
	        		?>
	        	</tbody>
	        </table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>



	<script type="text/javascript" src="js/sweetalert2@11.js"></script>
	<script type="text/javascript" src="js/colores.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<!-- JavaScript Bundle with Popper -->

	<script>
		$(document).ready(function() {
		    $('#tabla').DataTable();
		} );
	</script>

	
</body>
</html>

