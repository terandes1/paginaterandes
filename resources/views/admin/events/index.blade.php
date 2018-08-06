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
       <a href="{{('/admin/events/create')}}" class="btn btn-primary">Nuevo Event</a>
    </div>

    <div class="col-md-12 table-responsive">
    </br>
        <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th scope="col">description</th>
            <th>img</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach($Events as $item)
              <tr>
                   
                    <td>{!! $item->name!!}</td>
                    <td>{!! $item->fecha_inicio!!}</td>
                    <td>{!! $item->fecha_fin!!}</td>
                    <td>{!! $item->description!!}</td>
                    <td><img style="width: 100px;" src="/assets/content/events/{{$item->id}}.{{$item->img}}"> </td></td>
                    <td>
                      <div class="row" >
                          <a  class="btn btn-success btn-sm" href="{{route('events.show',$item->id)}} "> 
                                <span class="fa fa-edit"> </span>
                          </a>
                        <div class="col-md-1">
                          
                        </div>
			              <div class="col-md-1">
			                {!! Form::open(['method' => 'DELETE','route' => ['events.destroy', $item->id]]) !!}
			                  {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
			                        {!! Form::close() !!}
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
  
@endsection