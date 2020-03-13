@extends('layouts.starter')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        <h1>Confirmar Eliminacion Reporte | {{$report->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <form action="/expense_reports/{{$report->id}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-lg">Eliminar</button>
            </form>    
        </div>
    </div>    
</div>
@endsection