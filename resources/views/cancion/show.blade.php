@extends('cancion/template')

@section('enlaces')
<li class="nav-item">
    <a class="nav-link" href="./">Home</a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="./">Cancion</a>
</li>
                    
@endsection


@section('canciones')
    <div></div>
     <div>
        <table class="table table-striped" id="Canciones">
            <tbody>
                <tr>
                    <td>id</td>
                    <td>{{ $cancion->id }}</td>
                </tr>
                <tr>
                    <td>Titulo</td>
                    <td>{{ $cancion->titulo }}</td>
                </tr>
                <tr>
                    <td>Interprete</td>
                    <td>{{ $cancion->interprete }}</td>
                </tr>
                <tr>
                    <td>Autor</td>
                    <td>{{ $cancion->autor }}</td>
                </tr>
                <tr>
                    <td>Duracion</td>
                    <td>{{ $cancion->duracion }}</td>
                </tr>
                <tr>
                    <td>Genero</td>
                    <td>{{ $cancion->genero }}</td>
                </tr>
                <tr>
                    <td>Album</td>
                    <td>{{ $cancion->album }}</td>
                </tr>
                <tr>
                    <td>Orden</td>
                    <td>{{ $cancion->orden }}</td>
                </tr>
                <tr>
                    <td>Fecha Publicacion</td>
                    <td>{{ $cancion->fechapublicacion }}
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
        &nbsp;
        <a href="{{ url('cancion/' . $cancion->id . '/edit') }}" class="btn btn-primary">edit Cancion</a>
        &nbsp;
        <button form="deleteForm" type="submit" class="btn btn-primary">delete Cancion</button>
    </div>
        <form action="{{ url('cancion/' . $cancion->id) }}" method="post" id="deleteForm">
            @csrf
            @method('delete')
        </form>
@endsection

