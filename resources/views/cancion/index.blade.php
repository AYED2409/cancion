
@extends('cancion/template')

@section('enlaces')
<li class="nav-item">
    <a class="nav-link" href="./cancion">Home</a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="./cancion">Cancion</a>
</li>
@endsection

@section('canciones')
    <div class="row">
        <h3>Listado de Canciones</h3>
    </div>
    <table class="table table-striped table-hover" id="tablaProducto">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Interprete</th>
                <th>Autor</th>
                <th>Duracion</th>
                <th>Genero</th>
                <th>Album</th>
                <th>Orden</th>
                <th>Fecha Publicacion</th>
                <th>Borrar</th>
                <th>Editar</th>
                <th>Ver</th>
            </tr>                    
        </thead>
        <tbody>
            @foreach($canciones as $cancion)
            <tr>
                <td>{{$cancion->id}}</td>
                <td>{{$cancion->titulo}}</td>
                <td>{{$cancion->interprete}}</td>
                <td>{{$cancion->autor}}</td>
                <td>{{$cancion->duracion}}</td>
                <td>{{$cancion->genero}}</td>
                <td>{{$cancion->album}}</td>
                <td>{{$cancion->orden}}</td>
                <td>{{$cancion->fechapublicacion}}</td>
                <td>
                    <a href="{{ url('cancion/'.$cancion->id) }}" class = "borrar">Borrar</a></td>
                <td><a href="{{ url('cancion/'.$cancion->id.'/edit') }}">Editar</a></td>
                <td><a href="{{ url('cancion/'.$cancion->id) }}">Ver</a></td>
            </tr>
                                    
            @endforeach                         
        </tbody>
    </table>
        <div class="row">
            <a href="{{ url('cancion/create') }}" class="btn btn-success">agregar Cancion</a>
        </div>
        <hr>

@endsection