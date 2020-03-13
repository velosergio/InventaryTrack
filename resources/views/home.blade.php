@extends('layouts.starter')

@section('content')
<div class="row">
    <div class="col">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
            <i class="material-icons">view_module</i>
          </div>
          <p class="card-category">Modulo de Inventario</p> 
          <h3 class="card-title">"Valor Total de la mercancia"
            <small>COP</small>
          </h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <a href="/expense_reports/">Ir a Inventario</a> 
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
