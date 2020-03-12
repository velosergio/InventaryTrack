@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crear Reporte</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/">Regresar</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
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
            <form action="/expense_reports" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Titulo:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserta el Titulo aqui">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>    
        </div>
    </div>    
</div>
@endsection