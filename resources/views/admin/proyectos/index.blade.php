@extends('admin')


@section('contenido')

{{-- <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	
	@foreach($proyectos as $proyecto)
	
		<ul>
			<li>{{ $proyecto->nombre }}</li>
			<li>{{ $proyecto->descripcion }}</li>
			<li>{{ $proyecto->fecha_inicio->format('d-m-Y') }}</li>
			<li>{{ $proyecto->categoria->nombre }}</li>
		</ul>

	@endforeach



</div> --}}


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="alert alert-light alert-elevate" role="alert">
		<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
		<div class="alert-text">
			ColReorder adds the ability for the end user to be able to reorder columns in a DataTable through a click and drag operation.
			See official documentation <a class="kt-link kt-font-bold" href="https://datatables.net/extensions/colreorder/" target="_blank">here</a>.
		</div>
	</div>
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-label">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-line-chart"></i>
				</span>
				<h3 class="kt-portlet__head-title">
					ColReorder DataTable
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<div class="kt-portlet__head-wrapper">
					<div class="kt-portlet__head-actions">
						<div class="dropdown dropdown-inline">
							<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-download"></i> Export
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<ul class="kt-nav">
									<li class="kt-nav__section kt-nav__section--first">
										<span class="kt-nav__section-text">Choose an option</span>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-print"></i>
											<span class="kt-nav__link-text">Print</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-copy"></i>
											<span class="kt-nav__link-text">Copy</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-file-excel-o"></i>
											<span class="kt-nav__link-text">Excel</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-file-text-o"></i>
											<span class="kt-nav__link-text">CSV</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-file-pdf-o"></i>
											<span class="kt-nav__link-text">PDF</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						&nbsp;
						<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
							<i class="la la-plus"></i>
							New Record
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">

			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Fecha de Inicio</th>
						<th>Categoría</th>
						
						<th class="text-center">Actions</th>
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
						
						<td class="text-center">
							<button class="btn btn-sm btn-success">
								<i class="fas fa-pen"></i>
							</button>
							<button class="btn btn-sm btn-danger">
								<i class="fas fa-eye"></i>
							</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<!--end: Datatable -->
		</div>
	</div>
</div>



@stop


@push('scripts')


<!--begin::Page Vendors(used by this page) -->
<script src="admin/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="admin/assets/js/pages/crud/datatables/extensions/colreorder.js" type="text/javascript"></script>

@endpush