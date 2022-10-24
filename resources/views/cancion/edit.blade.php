@extends('cancion/template')

@section('enlaces')
    <li class="nav-item">
        <a class="nav-link" href="cancion/../..">Home</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="cancion/../..">Cancion</a>
    </li>

@endsection
    @section('canciones')
<div>
    <form action="{{ url('cancion/'. $cancion->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="titulo">Titulo Cancion</label>
            <input value="{{ old('titulo', $cancion->titulo) }}" required type="text" minlength="3" maxlength="100" class="form-control" id="titulo" name="titulo" placeholder="Titulo de la Cancion">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="interprete">Interprete de la  Cancion</label>
            <input value="{{ old('interprete', $cancion->interprete) }}" required type="text" minlength="3" maxlength="100" class="form-control" id="interprete" name="interprete" placeholder="Interprete de la Cancion">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="autor">Autor de la Cancion</label>
            <input value="{{ old('autor', $cancion->autor) }}" required type="text" minlength="3" maxlength="100" class="form-control" id="titulo" name="titulo" placeholder="Titulo de la Cancion">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="duracion">Duracion de la Cancion</label>
            <input type= 'time' list='listatiempo' step="1" value="{{ old('duracion', $cancion->duracion) }}" required type="text" minlength="3" maxlength="100" class="form-control" id="duracion" name="duracion" placeholder="Duracion de la Cancion">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="genero">Genero de la Cancion</label>
            <input value="{{ old('genero', $cancion->genero) }}" required type="text" minlength="3" maxlength="100" class="form-control" id="genero" name="genero" placeholder="Genero de la Cancion">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="album">Album de la Cancion</label>
            <input value="{{ old('album', $cancion->album) }}" required type="text" minlength="3" maxlength="100" class="form-control" id="album" name="album" placeholder="Album de la Cancion">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label  for="orden">Orden de la Cancion</label>
            <input type='number' min='1' max='200' value="{{ old('orden', $cancion->orden) }}" required type="text" minlength="3" maxlength="100" class="form-control" id="orden" name="orden" placeholder="Orden de la Cancion">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="fechapublicacion">Fecha Publicacion de la Cancion</label>
            <input type='date' min="1948-01-01" max="2022-10-22" value="{{ old('fechapublicacion', $cancion->fechapublicacion) }}" required type="text" minlength="3" maxlength="100" class="form-control" id="titulo" name="titulo" placeholder="Fecha de Publicacion Cancion">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">edit Cancion</button>
        &nbsp;
        <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
        &nbsp;
        <a href="{{ url('cancion/' . $cancion->id) }}" class="btn btn-primary">view Cancion</a>
        &nbsp;
        <button type="submit" form="deleteForm" class="btn btn-primary">delete Cancion</button>
    </form>
    &nbsp;
    <form action="{{ url('cancion/' . $cancion->id) }}" method="post" id="deleteForm">
        @csrf
        @method('delete')
    </form>
</div>
@endsection