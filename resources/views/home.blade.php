@extends('layouts.app') 

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row col-12">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
                <h2 class="">{{$fecha}}</h2>
                <h4 class="card-text">
                  Agregar venta
                </h4>
                <div class="container">
              <div class="row">
                <div class="col-6 div-btn">.                           
                <button type="button" class="btn btn-venta btn-primary" data-toggle="modal" data-target="#venta" data-whatever="@mdo"><i class="icono-s fa fa-cart-plus" aria-hidden="true"></i><h4>Agrega Venta</h4></button>                            
                </div>
                <div class="col-6 div-btn">.                           
                <button type="button" class="btn btn-venta btn-primary" data-toggle="modal" data-target="#addrep" data-whatever="@mdo"><i class="icono-s fa fa-mobile" aria-hidden="true"></i><h4>Agrega Reparacion</h4></button>                            
                </div>
                <!-- Force next columns to break to new line at md breakpoint and up -->
                <div class="w-100 d-none d-md-block"></div>

                <div class="col-6 div-btn">                            
                  <button type="button" class="btn  btn-venta btn-primary" data-toggle="modal" data-target="#encargo" data-whatever="@getbootstrap"><i class="icono-s fa fa-list-alt" aria-hidden="true"></i><h4>Encargos</h4></button>
                  </div>
                <div class="col-6 div-btn">
                        <button type="button" class="btn  btn-venta btn-primary" data-toggle="modal" data-target="#entrep" data-whatever="@getbootstrap"><i class="icono-s fa fa-check-square" aria-hidden="true"></i><h4>Entregar Reparacion</h4></button></div>
                    </div>
            </div>
                </div>
              </div>
            </div>
     <div class="row col-4">
          <div class="col-10">
            <div class="card border-primary mb-3">
              <div class="card-header"><h3>En Caja</h3></div>
              <div class="card-body text-primary">
                <h5 class="card-title">Venta del dia de hoy</h5>
              </div>
              @if(is_null($venta))
              <div class="card-body text-primary">
                <p class="card-text">No se han registrado ventas el dia de hoy</p>
              </div>
              @else
               <div class="card-header" style="text-align: right;"><h4>Venta: {{$venta->venta}}</h4></div>
               <div class="card-header"style="text-align: right;" ><h4>Gastos: {{$venta->gastos}}</h4></div>


                <span class="input-group-text">Total</span>
                    <span class="input-group-text"><h4>$ {{$venta->total}}</h4></span>
                </div>
                @endif
          </div> 
          <!-- /.col-md-6 -->

        <div class="w-100 d-none d-md-block"></div>
         <div class="col-12">
            <div class="card border-primary ">
          <div class="col-10 div-btn">
            <button type="button" class="btn  btn-gasto btn-primary" data-toggle="modal" data-target="#gasto" data-whatever="@getbootstrap"><i class="icono-s fa fa-money" aria-hidden="true"></i><h4>Agrega Gasto</h4></button></div>
            </div>
          </div> 
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<!-- modal compra -->
    <div class="modal fade" id="venta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">VENTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('AgregarVenta') }}">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tipo</label>
           <select name="tipo" id="tipo">
            <option value="">Seleccionar</option>
            <option value="Cargador">Cargador</option>
            <option value="Vidrio">Vidrio templado</option>
            <option value="Audifonos">Autdifonos</option>
            <option value="ChipM">Chip Movistar</option>
            <option value="ChipT">Chip Telcel</option>
          </select>
          </div>
          <div class="form-group" id="modelo" style="display: none;">
            <label for="recipient-name" class="col-form-label">Marcar</label>
            <select name="marca" id="marca">
            <option value="">Seleccionar</option>
            <option value="Samsung">Samsung</option>
            <option value="Motorola">Motorola</option>
            <option value="Huawei">Huawei</option>
            <option value="Lg">Lg</option>
            <option value="Sony">Sony</option>
            <option value="Lanix">Lanix</option>
            <option value="Lanix">Lanix</option>
          </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Modelo</label>
            <input type="tect" class="form-control" name="modelo">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Precio</label>
            <input type="number" class="form-control" name="precio">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Detalle:</label>
            <textarea class="form-control" name="descripcion"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="input" class="btn btn-primary">Agregar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>  

<!-- modal reparacion -->
<div class="modal fade" id="addrep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<!-- modal encargo -->
<div class="modal fade" id="encargo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<!-- modal entrega -->
<div class="modal fade" id="entrep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<!-- modal gasto -->
<div class="modal fade" id="gasto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GASTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <form method="POST" action="{{ route('AgregarGasto') }}">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tipo de gasto</label>
            <input type="tect" class="form-control" name="tipo">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Monto</label>
            <input type="number" class="form-control" name="precio">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Detalle:</label>
            <textarea class="form-control" name="descripcion"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="input" class="btn btn-primary">Agregar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
@endsection
<script>
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
