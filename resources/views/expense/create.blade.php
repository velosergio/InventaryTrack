@extends('layouts.starter')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>Crear Elemento | InventaryTracker</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- Instrucciones -->
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Hola!</strong> Ingresa el nombre del elemento y su valor.
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
            <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Descripción:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Descripción">
                </div>
                <div class="form-group">
                    <label for="amount">Gasto:</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Valor">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>    
        </div>
    </div>    
</div>
@endsection