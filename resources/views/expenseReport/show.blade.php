@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ver Reporte | {{$report->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/">Regresar</a>
            <a class="btn btn-outline-success" href="/expense_reports/{{$report->id}}/expenses/create">Agregar</a>
            <a class="btn btn-outline-info" href="/expense_reports/{{$report->id}}/confirmSendMail">Enviar por correo</a>
        </div>
    </div>
    <div class="row">
        <br/>
        <h3>Detalles:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($report->expenses as $expense)
            <tr>
                <td>{{ $expense->description }}</td>
                <td>{{ $expense->created_at }}</td>
                <td>{{ $expense->amount }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>    
</div>
@endsection