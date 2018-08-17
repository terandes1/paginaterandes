@extends('admin.layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      @if (session('info'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif
    </div>
    <div class="col-md-2">
    </br>
       <a href="{{('/admin/icons/create')}}" class="btn btn-primary">Nuevo icono</a>
    </div>

    <div class="col-md-12 table-responsive">
    </br>
        <table class="table" id="table_events">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Icono</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
            @foreach($icons as $item)
              <tr>
                   
                    <td>{!! $item->name!!}</td>
                    <td><img style="width: 100px;" src="/assets/content/iconos/{{$item->id}}.{{$item->url}}"></td>
                    <td>

                        
                        <div class="col-md-1">
                              <a  class="btn btn-success btn-sm" href="{{route('icons.show',$item->id)}} "> 
                                    <span class="fa fa-edit"> </span>
                              </a>
                        </div><br>

                        <div class="col-md-1">
                            {!! Form::open(['method' => 'DELETE','route' => ['icons.destroy', $item->id]]) !!}
                              {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                                    {!! Form::close() !!}
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
      $('#table_events').DataTable();
    });
  </script>
@endsection