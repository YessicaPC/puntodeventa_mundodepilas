@extends('layouts.app') 

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Registrar Tienda</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registrar Tienda</li>
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
          <div class="col">
            <table class="table">
                <form method="POST" action="{{ route('AgregarTienda') }}">
          @csrf
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre de Tienda</label>
                    <input type="text" class="form-control" name="NombreT">
                  </div>
                   <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="Nadmin" name="Nadmin" checked="">
                    <label class="form-check-label" for="exampleCheck1">Yo sere el Administrador</label>
                  </div>
                  <div class="form-group" style="display: none;" id="Administrador">
                    <label for="recipient-name" class="col-form-label">Administrador</label>
                    <input type="text" class="form-control" name="admin">
                  </div> 
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Correo</label>
                    <input type="email" class="form-control" name="email">
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Contraseña</label>
                    <input type="password" class="form-control" name="contrasena">
                  </div>
                    <button type="input" class="btn btn-primary">Agregar</button>
  
                </form>      
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
