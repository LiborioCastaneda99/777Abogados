<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$tildes = $conexion->query("SET NAMES 'utf8'");
$sql="SELECT id, nombre, apellidos, correo, mensaje FROM solicitudes WHERE estado = 1";
$result=mysqli_query($conexion,$sql);

?>

<div>
	<div class="table-responsive">

		<table class="table table-hover small" id="cargarClientesVerificar">
			<thead class="text-center bg-primary">
				<tr>
					<td style="color:#fff; font-size:14px;">Nombres</td>
					<td style="color:#fff; font-size:14px;">Apellidos</td>
					<td style="color:#fff; font-size:14px;">Correo</td>
					<td style="color:#fff; font-size:14px;">Mensaje</td>
				</tr>
			</thead>
			
			<tbody >
				<?php 
				while ($mostrar=mysqli_fetch_row($result)) {
					?>
						<tr class="text-center">
							<td><?php echo strtoupper($mostrar[1]); ?></td>
							<td><?php echo strtoupper($mostrar[2]); ?></td>
							<td><?php echo strtoupper($mostrar[3]); ?></td>
							<td><?php echo strtoupper($mostrar[4]); ?></td>
						</tr>
					<?php 
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
   
	var table = $('#cargarClientesVerificar').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
        "infoEmpty": "Mostrando 0 de 0 de 0 Registros",
        "infoFiltered": "(Filtrado de _MAX_ total Registros)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
});
</script>