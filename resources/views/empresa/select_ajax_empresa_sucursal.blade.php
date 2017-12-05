<option>--- Seleccione la sucursal ---</option>
@if(!empty($sucursales))
	@foreach($sucursales as $sucursal)
		<option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
	@endforeach
@endif