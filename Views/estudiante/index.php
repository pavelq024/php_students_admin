 <div class="panel panel-success">
 	<div class="panel-heading">
 		<h3 class="panel-title">Listado de estudiantes</h3>
 	</div>
 	<div class="panel-body">
 			<table class="table table-stripped table-hover">
 			<thead>
 				<tr>
 					<th>Imagen</th>
 					<th>Nombre</th>
 					<th>Edad</th>
 					<th>Seccion</th>
 					<th>Promedio</th>
 					<th>Accion</th>
 				</tr>
 			</thead>
 			<tbody>
 				
				<?php while ($row = mysqli_fetch_array($datos)) { ?>
					<tr>
						<td><img class="imagen-avatar" src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $row['imagen']; ?>"></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['edad']; ?></td>
						<td><?php echo $row['nombre_seccion']; ?></td>
						<td><?php echo $row['promedio']; ?></td>
						<td><a class="btn btn-warning" href="<?php echo URL; ?>estudiante/editar/<?php echo $row['id']; ?>">Editar</a>
							<a class="btn btn-danger" href="<?php echo URL; ?>estudiante/eliminar/<?php echo $row['id']; ?>">Eliminar</a></td>
					</tr>
				<?php	} ?>
 				
 			</tbody>
 		</table>
 	</div>
 </div>