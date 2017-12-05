<?php

use Illuminate\Support\Collection;
use App\Empresa;
use App\Sucursal;
use App\Contrato;
use App\Empleado;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/prueba', function () {
	$empresas = Empresa::all();
	$empleados = Empleado::all();
	$contratos = Contrato::all();

    // dd($empresas);
    // dd($sucursales);
    dd($contratos);
    // dd($empleados);

});

//AsistenciaController

Route::resource('asistencia', 'AsistenciaController');
Route::post('/empresa/ajax_empresa_sucursal', 'EmpresaController@ajaxEmpresaSucursal')->name('ajax_empresa_sucursal');

Route::post('/sucursal/ajax_sucursal_empleados', 'SucursalController@ajaxSucursalEmpleados')->name('ajax_sucursal_empleados');
Route::get('/sucursal/ajax_sucursal_empleados/{id}', 'SucursalController@ajaxSucursalEmpleados');




/**
 * Empresas y sucursales
 * ========================
 * Detalles: # modelos (2) y # tablas (2)
 * 
 * Business Rules (reglas de negocio):
 * Una empresa puede tener muchas sucursales
 * Una sucursal puede ser de una empresa
 *
 * Tipo de relación: One to Many Relationship
 *
 * Empresa => has many
 * sucursal => belongs to
 */

/**
 * Empleado y contrato
 * ========================
 * Detalles: # modelos (2) y # tablas (2)
 * 
 * Business Rules (reglas de negocio):
 * Un empleado puede tener muchos contratos pero solo uno activo
 * Un contrato puede ser de un empleado
 *
 * Tipo de relación: One to Many Relationship
 *
 * Empleado => has many
 * contrato => belongs to
 */

/**
 * Sucursal y Contrato
 * ========================
 * Detalles: # modelos (2) y # tablas (3)
 * 
 * Business Rules (reglas de negocio):
 * Una Sucursal puede tener muchos contratos
 * Un contrato puede tener muchas sucursales de una misma empresa
 *
 * Tipo de relación: Many to Many Relationship
 *
 * Sucursal => belongs to many
 * contrato => belongs to many
 */

/**
 * Empresa y Sucursal
 * ========================
 * Detalles: # modelos (2) y # tablas (2)
 * 
 * Business Rules (reglas de negocio):
 * Un(a) Empresa puede tener mucho(a)s sucursales
 * Un(a) sucursal puede ser de un(a) Empresa
 *
 * Tipo de relación: One to Many Relationship
 *
 * Empresa => has many
 * Sucursal => belongs to
 */

/**
 * Tablas:
 * Cargos: los cargos que ocupan lo empleados enlazado con contrato
 * Festivos 
 * Asitencia: se lleva registro por empleado que dia si o nó trabajó, que porcentaje del día trabajó.
 * Motivos-Inasistencia: topos de ausencia.
 * debe existir un formulario de asistencia en donde muestre, la fecha, select empresa- sucursal, select multiple con empleados con contrato activo, guardar 
 * Debe existir un reporte en donde se solicite un rango de fechas, Empresa-sucursal, y muestre una tabla con los dias laborados, domingos laborados, festivos laborados, numero desimal de dias pagados, dias no laborados de acuerdo al motivo
 */