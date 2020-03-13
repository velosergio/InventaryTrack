@extends('layouts.starter') 

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>{{$report->title}} | InventaryTracker</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/{{$report->id}}/expenses/create">
                <i class="material-icons">add</i> Agregar</a>
            <a class="btn btn-primary" href="/expense_reports/{{$report->id}}/confirmSendMail">
                <i class="material-icons">email</i> Enviar por correo</a>
            <br/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary ">
              <h4 class="card-title ">Agregar Elementos</h4>
              <p class="card-category"> Crea, Elimina o Actualiza Elementos de tu inventario</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Descripción
                    </th>
                    <th>
                      Fecha
                    </th>
                    <th>
                      Total
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($report->expenses as $expense)
                    <tr>
                      <td>
                        {{ $expense->id }}
                      </td>
                      <td>
                        {{ $expense->description }}
                      </td>
                      <td>
                        {{ $expense->created_at }}
                      </td>
                      <td>
                        {{ $expense->amount }}
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