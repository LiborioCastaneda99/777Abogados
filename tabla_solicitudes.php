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
			<thead class="text-center" style="background: #d2a146;">
				<tr>
					<td style="color:#fff; font-size:14px; width: 17%;">Nombres</td>
					<td style="color:#fff; font-size:14px; width: 17%;">Apellidos</td>
					<td style="color:#fff; font-size:14px; width: 17%;">Correo</td>
					<td style="color:#fff; font-size:14px; width: 40%;">Mensaje</td>
					<td style="color:#fff; font-size:14px; width: 9%;" class="td-actions">Responder</td>
				</tr>
			</thead>
			
			<tbody >
				<?php 
				while ($mostrar=mysqli_fetch_row($result)) {
					?>
						<tr class="text-center">
							<td><?= ucwords( $n = strtolower($mostrar[1])); ?></td>
							<td><?= ucwords( $a = strtolower($mostrar[2])); ?></td>
							<td><?= ucwords( $c = strtolower($mostrar[3])); ?></td>
							<td><b><?= ($mostrar[4]); ?></b></td>
							<td>
								<span class="btn btn-outline-primary btn-sm btn-round" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
									<span class="material-icons">
										forward_to_inbox
									</span>
								</span>
							</td>
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