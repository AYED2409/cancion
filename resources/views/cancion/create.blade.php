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
    <div>
        <form action="{{ url('cancion') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input value="{{ old('titulo') }}" required type="text" minlength="3" maxlength="80" class="form-control" id="titulo" name="titulo" placeholder="titulo de Cancion">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="interprete">Interprete</label>
                <input value="{{ old('interprete') }}" required type="text" minlength="3" maxlength="100" class="form-control" id="interprete" name="interprete" placeholder="interprete de cancion">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="autor">Autor</label>
                <input value="{{ old('autor') }}" required type="text" minlength="3" maxlength="100" class="form-control" id="autor" name="autor" placeholder="Autor de la cancion">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="duracion">Duracion</label>
                <input type= 'time' list='listatiempo' step="1" value="{{ old('duracion') }}" required type="text" minlength="3" maxlength="100" class="form-control" id="duracion" name="duracion" placeholder="duracion de la Cancion">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="genero">Genero</label>
                <input value="{{ old('genero') }}" required type="text" minlength="3" maxlength="20" class="form-control" id="genero" name="genero" placeholder="genero de la cancion">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="album">Album</label>
                <input value="{{ old('album') }}" required type="text" minlength="3" maxlength="70" class="form-control" id="album" name="album" placeholder="Album de la cancion">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="orden">Orden</label>
                <input type='number' min='1' max='200' value="{{ old('orden') }}" required type="text" minlength="3" maxlength="100" class="form-control" id="orden" name="orden" placeholder="Orden de la cancion">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="fechapublicacion">Fecha de Publicacion</label>
                <input type='date' min="1948-01-01" max="2022-10-22" value="{{ old('fechapublicacion') }}" required type="text" minlength="3" maxlength="100" class="form-control" id="fechapublicacion" name="fechapublicacion" placeholder="Fecha de Publicacion de la cancion">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">add</button>
            &nbsp;
            <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
        </form>
    </div>        
@endsection
    <input type="submit" value="Enviar datos">