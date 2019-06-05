@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header" style="background-color:wheat;text-align:center;text-shadow:-2px 1px 5px blue;font-size:25px;font-family:cursive;">
                {{$prueba->ab1}}
            </div>
            <div class="card-body text-center">
                {{$prueba->ab2}}
            </div>
            <div class="card-footer" style="background-color:wheat;text-align:center;font-family:cursive;">
                <div class="row">
                    <div class="col-md-6" style=" text-decoration: overline;">
                        <br>
                        <p class="card-title">{{$prueba->ab3}}</p>
                    </div>
                    <div class="col-md-6" style=" text-decoration: overline;">
                        <br>
                        <p class="card-title">{{$prueba->ab4}}</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="/home" class="btn btn-dark">Regresar</a>
    </div>
</div>
@endsection