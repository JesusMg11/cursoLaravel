@extends('templates.plantilla')

@section('contenido')
</div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
            <form action="{{ route('alumnos.update',$alumno->id) }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Alumno</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Número de control</span>
                        <input type="text" class="form-control" placeholder="No. Control" required name="ncontrol" value="{{ $alumno->ncontrol }}" />
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Nombre</span>
                        <input type="text" class="form-control" placeholder="Nombre" required name="nombre"  value="{{ $alumno->nombre }}"/>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Dirección</span>
                        <input type="text" class="form-control" placeholder="Dirección" required name="direccion"  value="{{ $alumno->direccion }}"/>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Fecha de Nacimiento</span>
                        <input type="date" class="form-control" required name="nacimiento"  value="{{ $alumno->nacimiento }}"/>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Teléfono</span>
                        <input type="text" class="form-control" placeholder="Teléfono" required name="telefono"  value="{{ $alumno->telefono }}"/>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Correo</span>
                        <input type="text" class="form-control" placeholder="Correo Electrónico" required name="correo"  value="{{ $alumno->correo }}"/>
                    </div>
                    <hr>
                    <div class="row" style="text-align:center">
                    <a href="{{ route('alumnos.inicio') }}" type="button" class="btn btn-secondary btn-md">
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary btn-md">Guardar</button>
                    </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
</div>
    
@endsection