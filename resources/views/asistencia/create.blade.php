@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        @include('layouts.nav', ['activar' => 'asistencias'])
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Asistencia</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count(session('errors')) > 0)
                        <div class="alert alert-danger">
                            @foreach (session('errors')->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    {!! Form::model($asistencia, [
                        'action' => 'AsistenciaController@store',
                    ]) !!}
                        
                        <div class="form-group">
                            {!! Form::label('empresa_id', 'Empresa') !!}
                            {!! Form::select('empresa_id',[''=>'--- Selecciones la empresa ---']+$empresas,null,['class'=>'form-control' , 'required' => 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Sucursal_id', 'Sucursal') !!}
                            {!! Form::select('Sucursal_id',[''=>'--- Selecciones la sucursal ---'],null,['class'=>'form-control' , 'required' => 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('empleado_id[]', 'Empleados') !!}
                            {!! Form::select('empleados_id[]',[''=>'--- Selecciones los empleados ---'],null,['class'=>'form-control' , 'required' => 'required','multiple' => 'true', 'id' => 'empleado_id']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    $("select[name='empresa_id']").change(function(){
        var empresa_id = $(this).val();
        var token = $("input[name='_token']").val();
        jQuery.ajax({
            url: "{{ route('ajax_empresa_sucursal') }}",
            method: 'POST',
            data: {empresa_id:empresa_id, _token:token},
            success: function(data) {
                $("select[name='Sucursal_id'").html('');
                $("select[name='Sucursal_id'").html(data.options);
            }
        });
    });

    $("select[name='Sucursal_id']").change(function(){
        var Sucursal_id = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('ajax_sucursal_empleados') }}",
            method: 'POST',
            data: {id:Sucursal_id, _token:token},
            success: function(data) {
                $("select[id='empleado_id'").html('');
                $("select[id='empleado_id'").html(data.options);
            }
        });
    });
});
</script>
@endsection