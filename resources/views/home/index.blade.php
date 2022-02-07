@extends('templates./template')
@section('content')
<div class="container-fluid">
  <div class="row mt-3">
      <div class="col-md-12">
          <h3></h3>
          <div class="jumbotron">   
              <p class="lead">Selamat datang {{session('fullName')}}</p>
              <hr class="my-4">
              <p class="lead">
                  <a href="{{'/help'}}"><button class="btn btn-sm">pelajari</button></a>
              </p>
          </div>
          <h4> </h4>
      </div>
  </div>
</div>
@endsection
