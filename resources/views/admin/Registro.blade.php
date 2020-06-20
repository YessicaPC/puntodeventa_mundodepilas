@extends('layouts.app') 

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Conteo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Conteo</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h2 class="">En caja</h2>
                <h4 class="card-text">
                  Las ventas que se tienen hasta el dia de hoy
                </h4>
                    <div class="container">
                       
                        <div class="container">
                          <div class="row">
                            <div class="col-sm">
                            <a href="{{ url('venta_dia') }}" class="card-link">Venta de hoy</a>
                            </div>
                            <div class="col-sm">
                            <a href="{{ url('ventasT') }}" class="card-link">Ventas</a>
                            </div>
                            <div class="col-sm">
                               <form method="get" action="{{ route('ventasF') }}">
                            <input type="date" name="fecha">     
                            <br>               
                            <button>aceptar</button>
                            </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">En caja</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Venta de ayer</a>
                <a href="#" class="card-link">Ventas</a>
              </div>
            </div>
          </div> 
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
@endsection
