@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: rebeccapurple;color: white">
                    Crea tu tarjeta de regalo
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/Prueba" method="POST" class="form-inline">
                        @csrf
                        <div class="form-group mx-sm-3">
                            <label for="" class="sr-only">Titulo</label>
                            <input type="text" name="ab1" id="ab1" class="form-control" placeholder="Titulo"/>
                        </div>
                        <div class="form-group mx-sm-3">
                            <label for="" class="sr-only">Descripcion</label>
                            <textarea type="text" name="ab2" id="ab2" class="form-control" placeholder="Descripción"></textarea>
                        </div>
                        <div class="form-group mx-sm-3">
                            <label for="" class="sr-only">A quien</label>
                            <input type="text" name="ab3" id="ab3" class="form-control" placeholder="A quien" />
                        </div>
                        <div class="form-group mx-sm-3">
                            <label for="" class="sr-only">De parte</label>
                            <input type="text" name="ab4" id="ab4" class="form-control" placeholder="De parte" />
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center" style="background-color: rebeccapurple;color: white">
                    Tarjetas creadas
                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Titulos</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($pruebas as $prueba)
                                <tbody>
                                    <tr>
                                        <td>{{$prueba->id}}</td>
                                        <td>{{$prueba->ab1}}</td>
                                        <td>
                                            <a href="/Prueba/{{$prueba->id}}" class="btn btn-info">Ver</a>
                                            <a href="/Prueba/{{$prueba->id}}/edit" class="btn btn-warning">Editar</a>
                                            <a href="/Prueba/d{{$prueba->id}}" class="btn btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
