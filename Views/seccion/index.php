 <div class="panel panel-success">
 	<div class="panel-heading">
 		<h3 class="panel-title">Listado de Secciones</h3>
 	</div>
 	<div class="panel-body">
 		<table class="table table-stripped table-hover">
 			<thead>
 				<tr>
 					<th>Id</th>
 					<th>Nombre</th>
 				</tr>
 			</thead>
 			<tbody>
 				
				<?php while ($row = mysqli_fetch_array($datos)) { ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><a class="btn btn-warning" href="<?php echo URL; ?>seccion/editar/<?php echo $row['id']; ?>">Editar</a>
							<a class="btn btn-danger" href="<?php echo URL; ?>seccion/eliminar/<?php echo $row['id']; ?>">Eliminar</a></td>
					</tr>
				<?php	} ?>
 				
 			</tbody>
 		</table>
 	</div>
 </div>