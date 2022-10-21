@extends('bike/plantilla')

@section('bikes')

        <div class="row">
                    <h3>Listado de Bikes</h3>
                   
                </div>
                <table class="table table-striped table-hover" id="tablaProducto">
                    
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Borrar</th>
                            <th>Editar</th>
                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                             @foreach($bikes as $bike)
                                <tr >
                                    <td>{{$bike->id}}</td>
                                    <td>{{$bike->name}}</td>
                                    <td>120</td>
                                                                            <td>
                                                                                <a href="{{ url('bike/'.$bike->id) }}" class = "borrar">Borrar</a></td>
                                                                            
                                        <td><a href="{{ url('bike/'.$bike->id.'/edit') }}">Editar</a></td>
                                                                            <td><a href="{{ url('bike/'.$bike->id) }}">Ver</a></td>
                                </tr>
                                
                                @endforeach
                                
                                
                                 </tbody>
                </table>
                <div class="row">
                    <a href="{{ url('bike/create') }}" class="btn btn-success">agregar bike</a>
                </div>
                <hr>
           
@endsection 
                        
                   
                               