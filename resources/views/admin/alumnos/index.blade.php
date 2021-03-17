@extends('templates.plantilla')

@section('contenido')
<h4>Alumnos</h4>
<hr>

<!-- Button trigger modal -->
<div style="text-align: right">
<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
    <i class="fas fa-user-plus"></i>Agregar
</button>
</div>
<br>

<table class="table-responsive">
    <thead class="table-dark">
        <th>ID</th>
        <th>Número de control</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Fecha de nacimiento</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($alumnos as $alu)
        <tr>
            <td>{{ $alu->id }}</td>
            <td>{{ $alu->ncontrol }}</td>
            <td>{{ $alu->nombre }}</td>
            <td>{{ $alu->direccion }}</td>
            <td>{{ $alu->nacimiento }}</td>
            <td>{{ $alu->telefono }}</td>
            <td>{{ $alu->correo}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>

{{--SECCION DE MODALS--}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="{{ route('alumnos.store') }}">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Alumno</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Número de control</span>
                    <input type="text" class="form-control" placeholder="No. Control" required name="ncontrol" />
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Nombre</span>
                    <input type="text" class="form-control" placeholder="Nombre" required name="nombre" />
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Dirección</span>
                    <input type="text" class="form-control" placeholder="Dirección" required name="direccion" />
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Fecha de Nacimiento</span>
                    <input type="date" class="form-control" required name="nacimiento" />
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Teléfono</span>
                    <input type="text" class="form-control" placeholder="Teléfono" required name="telefono" />
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Correo</span>
                    <input type="text" class="form-control" placeholder="Correo Electrónico" required name="correo" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Cancelar
                </button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{--FIN DE SECCION DE MODALS--}}
@endsection