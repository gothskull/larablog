<style>
	.custom-file-input:lang(es)~.custom-file-label::after
		{
			content:"Buscar..."!important;
		}
</style>
@extends('admin')


@section('contenido')

<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Formulario
			</h3>
		</div>
	</div>

	<!--begin::Form-->
	<div class="col-md-8 ">
		{{-- @if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif --}}
		<form class="kt-form kt-form--label-right" method="POST" action="{{ route('admin.proyectos.store')}} ">
			@csrf
			<div class="kt-portlet__body">
				<div class="form-group row ">
					<label for="nombre" class="col-3 col-form-label">Nombre del proyecto</label>
					<div class="col-9">
						<input class="form-control @error('nombre') is-invalid @enderror" type="text"  id="nombre" name="nombre" value="{{ old('nombre') }} ">
						@error('nombre')
							<span class="invalid-feedback">{{ $message }}</span>
						@enderror
						
						
					</div>
				</div>
				<div class="form-group row">
					<label for="descripcion" class="col-3 col-form-label">Descripción</label>
					<div class="col-9">
						<textarea class="form-control @error('descripcion') is-invalid @enderror " id="descripcion" rows="3" name="descripcion"></textarea>
						@error('descripcion')
							<span class="invalid-feedback">{{ $message }}</span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<label for="categoria_id" class="col-3 col-form-label">Categorias</label>
					<div class="col-9">
						<select class=" form-control @error('categoria_id') is-invalid @enderror" id="categoria_id" name="categoria_id">
							<option value="0">Selecciona una categoria</option>
							@foreach($categorias as $categoria )
								<option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }} >{{ $categoria->nombre }}</option>
							@endforeach
						</select>
						@error('catyegoria_id')
							<span class="invalid-feedback">{{ $message }} </span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<label for="servidor" class="col-3 col-form-label">Empresa de hosting</label>
					<div class="col-9">
						<select class="form-control @error('servidor_id') is-invalid @enderror" id="servidor" name="servidor_id">
							<option value="0">Selecciona una empresa de hosting</option>
							@foreach($servidores as $servidor )
								<option value="{{ $servidor->id }}" {{ old('servidor_id') == $servidor->id ? 'selected' : '' }} >{{ $servidor->nombre }}</option>
							@endforeach
						</select>
						@error('servidor_id')
							<spnan class="invalid-feedback">{{ $message }} </spnan>
						@enderror
						
					</div>
				</div>
				<div class="form-group row">
					<label for="emp_dominio" class="col-3 col-form-label">Proveedor de dominio</label>
					<div class="col-9">
						<select class="form-control @error('emp_dominio_id')is-invalid @enderror " id="emp_dominio" name="emp_dominio_id">
							<option value="0">Selecciona un proveedor de dominios</option>
							@foreach($emp_dominios as $emp_dominio )
								<option value="{{ $emp_dominio->id }}" {{ old('emp_dominio_id') == $emp_dominio->id ? 'selected' : ''}} >{{ $emp_dominio->nombre }}</option>
							@endforeach
						</select>
						@error('emp_dominio_id')
							<span class="invalid-feedback">{{ $message }} </span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<label for="representante" class="col-3 col-form-label">Representante</label>
					<div class="col-9">
						<select class="form-control @error('representante_id')is-invalid @enderror" id="representante" name="representante_id">
							<option value="0">Selecciona un representante</option>
							@foreach($representantes as $representante )
								<option value="{{ $representante->id }}" {{ old('representante_id') == $representante->id ? 'selected' : '' }} >{{ $representante->nombre }}</option>
							@endforeach
						</select>
						@error('representante_id')
							<span class="invalid-feedback">{{ $message }} </span>
						@enderror
						
					</div>
				</div>
				<div class="form-group row">
					<label for="plan" class="col-3 col-form-label">Plan</label>
					<div class="col-9">
						<select class="form-control @error('plan_id') is-invalid @enderror " id="plan" name="plan_id">
							<option value="0">Selecciona un plan</option>
							@foreach($planes as $plan )
								<option value="{{ $plan->id }}"  {{ old('plan_id') == $plan->id  ? "selected" : '' }}>{{ $plan->nombre }}</option>
							@endforeach
						</select>
						@error('plan_id')
							<span class="invalid-feedback">{{ $message }} </span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<label for="fecha_inicio" class="col-3 col-form-label">Fecha de ingreso</label>
					<div class="col-9 input-group">
						<div class="input-group-prepend">
				          <span class="input-group-text" id="inputGroupPrepend">
				          	<i class="far fa-calendar-alt"></i>
				          </span>
				        </div>
						<input class="form-control @error('fecha_inicio') is-invalid @enderror" type="date" value="{{ old('fecha_inicio') }}" id="fecha_inicio" name="fecha_inicio">
						@error('fecha_inicio')
						 <span class="invalid-feedback">{{ $message }} </span>
						@enderror
						
					</div>
				</div>
				<div class="form-group row">
					<label for="logo" class="col-3 col-form-label">Logo</label>
					<div class="col-9 ">
						<div class="custom-file">
							<input type="file" class="custom-file-input @error('logo') is-invalid @enderror " id="logo" name="logo" value="">
							<label class="custom-file-label" for="customFile">{{ old('logo') }}</label>
							@error('logo')
							 <span class="invalid-feedback">{{ $message }} </span>
							@enderror
						</div>
						
					</div>
			</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<div class="row justify-content-center">
						<div class="col-2">
						</div>
						<div class="col-10">
							<button type="submit" class="btn btn-sm btn-success">Crear</button>
							<button type="reset" class="btn btn-sm btn-secondary">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

@stop

@push('scripts')

@endpush