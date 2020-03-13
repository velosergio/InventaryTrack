@extends('layouts.starter')

@section('content')
<div class="container text-center">
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary ">
              <h4 class="card-title ">Reportes de Almacenes</h4>
              <p class="card-category"> Crea, Elimina o Actualiza los Almacenes de tu Inventario</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Titulo
                    </th>
                    <th>
                      Opciones
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($expenseReports as $expenseReport)
                    <tr>
                      <td>
                        <a href="/expense_reports/{{$expenseReport->id}}">{{$expenseReport->id}}
                      </td>
                      <td>
                        <a href="/expense_reports/{{$expenseReport->id}}">{{$expenseReport->title}}
                      </td>
                      <td>
                        <a href="/expense_reports/{{$expenseReport->id}}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="/expense_reports/{{$expenseReport->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
                        <a href="/expense_reports/{{$expenseReport->id}}/confirmDelete" class="btn btn-danger btn-sm">Eliminar</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection