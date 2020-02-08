@extends('admin')

@section('contenido')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
Usuario  {{ auth()-> user()->name }}
</div>
@endsection
