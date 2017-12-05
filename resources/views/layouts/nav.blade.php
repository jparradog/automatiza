@php
    $opcionesMenu = [
    	["inicio" , "Inicio", "/"],
    	["datosBasicos" , "Datos Básicos", "/"],
    	["empresas" , "Empresas", "/"],
    	["sucursales" , "Sucursales", "/"],
    	["empleados" , "Empleados", "/"],
        ["asistencias" , "Asistencia" , "/asistencia/create"],
    ];
    //dd($opcionesMenu);
@endphp
<div class="col-md-2">
    <nav class="nav flex-column nav-pills" name="menu-vertical">
    	@foreach ($opcionesMenu as list($id, $nombre, $ruta))
    	    <a class="nav-link @if ($id == $activar) {{ 'active' }} @endif" href="{{ $ruta }}">{{ $nombre }}</a>
    	@endforeach
    </nav>
</div>