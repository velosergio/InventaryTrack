@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Inventario | InventaryTracker</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/create">Crear reporte</a>
            <br/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($expenseReports as $expenseReport)
                    <tr>
                        <td><a href="/expense_reports/{{$expenseReport->id}}">{{$expenseReport->title}}</a></td>
                        <td>
                            <a href="/expense_reports/{{$expenseReport->id}}" class="btn btn-outline-success">Ver</a>
                            <a href="/expense_reports/{{$expenseReport->id}}/edit" class="btn btn-outline-info">Editar</a>
                            <a href="/expense_reports/{{$expenseReport->id}}/confirmDelete" class="btn btn-outline-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody> 
            </table>
        </div>
    </div>    
</div>
@endsection