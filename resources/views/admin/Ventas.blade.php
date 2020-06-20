@extends('layouts.app') 

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ventas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Articulos vendidos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   
    <br>
       <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Articulo</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Precio</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($articulos as $articulo)
                <tr>
                  <td>{{$articulo->IngresoEgreso}}</td>
                  <td>{{$articulo->tipo}}</td>
                  <td>{{$articulo->cantidad}}</td>
                  <td>{{$articulo->precio}}</td>
                
                </tr>               
                @endforeach
              </tbody>
            </table>   
          </div> 
        </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="content">
      <div class="container-fluid">
        <h3>Venta</h3>
        <div class="row">
          <div class="col">
                 
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Fecha</th>
                  <th scope="col">Venta</th>
                  <th scope="col">Gastos</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ventas as $venta)
                <tr>
                  <td>{{$venta->fecha}}</td>
                  <td>{{$venta->venta}}</td>
                  <td>{{$venta->gastos}}</td>
                  <td>{{$venta->total}}</td>
                </tr>
               @endforeach
              </tbody>
            </table>          
          </div> 
        </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
