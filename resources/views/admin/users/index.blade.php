@extends('admin.layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if (session('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif
    </div>
    <div class="col-md-2">

        <a href="{{('/admin/users/create')}}" class="btn btn-primary">Nuevo Usuario</a>

    </div>
  </div>
</div>
@endsection
