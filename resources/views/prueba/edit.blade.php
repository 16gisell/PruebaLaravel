@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center" style="background-color: rebeccapurple;color: white">
                Cambiemos la Tarjeta
            </div>
            <div class="card-body">
                <form action="/Prueba/{{$prueba->id}}" method="POST" class="form-inline">
                    @method('PUT')
                    @csrf
                    <div class="form-group mx-sm-3">
                        <label for="" class="sr-only">Titulo</label>
                        <input type="text" name="ab1" id="ab1" class="form-control" placeholder="Titulo" value="{{$prueba->ab1}}" />
                    </div>
                    <div class="form-group mx-sm-3">
                        <label for="" class="sr-only">Descripcion</label>
                        <textarea type="text" name="ab2" id="ab2" class="form-control" placeholder="Descripción" value="">{{$prueba->ab2}}</textarea>
                    </div>
                    <div class="form-group mx-sm-3">
                        <label for="" class="sr-only">A quien</label>
                        <input type="text" name="ab3" id="ab3" class="form-control" placeholder="A quien" value="{{$prueba->ab3}}" />
                    </div>
                    <div class="form-group mx-sm-3">
                        <label for="" class="sr-only">De parte</label>
                        <input type="text" name="ab4" id="ab4" class="form-control" placeholder="De parte" value="{{$prueba->ab4}}" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Cambiar</button>
                </form>
            </div>
        </div>
        <br>
        <a href="/Prueba/{{$prueba->id}}" class="btn btn-dark">Regresar</a>
    </div>
</div>
@endsection