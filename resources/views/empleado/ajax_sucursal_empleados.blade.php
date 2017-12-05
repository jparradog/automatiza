{{-- {{ dd($sucursal['contratos']) }}  --}}
<option>--- Seleccione los empleados ---</option>
@if(!empty($sucursal))
	@foreach($sucursal['contratos'] as $key => $contrato)
		<option value="{{ $contrato['empleado']['id'] }}">{{ $contrato['empleado']['primer_nombre'] }}</option>
	@endforeach
@endif