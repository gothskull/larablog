<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Fecha de Inicio</th>
			<th>Categoría</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($proyectos as $proyecto)
			<tr>
				<td>{{ $proyecto->id }}</td>
				<td>{{ $proyecto->nombre }}</td>
				<td>{{ $proyecto->descripcion }}</td>
				<td>{{ $proyecto->fecha_inicio->format('d-m-Y') }}</td>
				<td>{{ $proyecto->categoria->nombre }}</td>
				<td nowrap></td>
			</tr>
		@endforeach
		
	</tbody>
</table>