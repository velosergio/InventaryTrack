@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inventary Tracker</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas Online!
                    <br />
                    <a class="btn btn-outline-primary" href="/expense_reports/">Ir al Inventario</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
