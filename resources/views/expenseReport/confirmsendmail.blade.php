@extends('layouts.starter')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>Enviar {{$report->title}} | InventaryTracker</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- Instrucciones -->
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Ingresa el correo electronico al que quieres enviar el formulario.
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
            <form action="/expense_reports/{{$report->id}}/sendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Inserta el Correo aqui" value="{{old('email')}}">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>    
        </div>
    </div>    
</div>
@endsection