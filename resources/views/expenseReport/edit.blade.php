@extends('layouts.starter')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>Editar {{$report->title}} | InventaryTracker</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- Instrucciones -->
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Ingresa el nuevo nombre del Almacen {{$report->title}} en el siguiente formulario.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Validacion de errores -->
            @if($errors->any())
                <br/>
                <div class="alert alert-danger">Jumm... hay los siguientes errores en el registro:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- /validacion de errores -->
        <form action="/expense_reports/{{$report->id}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Titulo:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$report->title}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>    
        </div>
    </div>    
</div>
@endsection