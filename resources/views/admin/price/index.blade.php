@extends('admin.layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      @if (session('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif
      @if (session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif
    </div>
    <div class="col-md-12">
      <p>Estos son los precios para el siguiente tour:</p>
      <h2>{{$tour->name}}</h2>
    </div>
    <div class="col-md-2">
    </br>
        <a href="{{('/admin/price/tour/'.$tour->id.'/create')}}" class="btn btn-primary">Nuevo Precio</a>

    </div>

    <div class="col-md-12">
    </br>
        <table class="table" id="table-prices">
        <thead>
          <tr>

            <th>Rango</th>
            <th>Monto</th>
            <th>Fecha de Creación</th>
            <th>Fecha de Actualización</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($prices as $price)
          <tr>
            <td>{{$price->range_first}} - {{$price->range_end}}</td>
            <td>$ {{$price->monto}}</td>
            <td>{{$price->created_at}}</td>
            <td>{{$price->updated_at}}</td>
            <td>
              <div class="container">
                <div class="row">
                <div class="col-xs-6">
                  <a href="{{url('/admin/price/'. $price->id )}}"><i class="fa fa-edit" style="color:blue;"></i></a>
                </div>
                <div class="col-xs-6">
                  {!!Form::open(['url'=>'/admin/price/'.$price->id,'method'=>'DELETE','id'=>'eliminar'.$price->id])!!}
                   &nbsp;&nbsp;&nbsp;&nbsp; <a href="#"><i name="eliminar{{$price->id}}" class="fa fa-times" style="color:red;"></i></a>
                  {!!Form::close()!!}
                </div>
              </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>




@endsection


@section('script')
  <script>


    $(()=>{

      $('#table-prices').DataTable();

      $('i[name^="eliminar"]').click((e)=>{
        let opcion = confirm("Esta seguro que desea eliminar este usuario");

        if(opcion == true){
          $('#'+$(e.target).attr('name')).submit();
        }


      });
    });
  </script>
@endsection
