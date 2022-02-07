@extends('templates./template')
@section('content')
<div class="container-fluid mt-4" >
  <div class="row mt-3 d-flex justify-content-center">
      <div class="col-md-10">
          <div class="card p-3 ">
              <div class="card-header ">
                  <h5>  <i class="fas fa-outdent"></i> All attendance</h5>
              </div>
              <div class="table-responsive">    
              <table class="table table-sm text-center" id="scedule" >
                <thead>
                  <tr>
                    <th style="width: 5px">#</th>
                    <th >fullName </th>
                    <th >date</th>
                    <th >time IN</th>
                    <th >time Out</th>
                    <th >location</th>                  
                  </tr>
                </thead>
                <tbody>
                    @foreach ($scedules as $item)             
                    <tr>   
                        <td>{{$loop->iteration}}.</td>
                        <td>{{$item->fullName}}</td>
                        <td>{{date('d-m-y',strtotime($item->date)) }} </td>
                        <td>{{$item->IN}}</td>
                        <td>{{$item->Out}}</td>
                        <td>
                        <button class="btn btn" id="attend" style="background:#d4dad0" data-bs-toggle="modal"    
                          data-nama="{{$item->fullName}}"
                          data-jamMasuk="{{$item->IN}}"
                          data-jamKeluar="{{$item->Out}}"
                          data-ld="{{strtok($item->location_In," ")}}"
                          data-lg="{{strstr($item->location_In, " ")}}"
                          data-ldOut="{{strtok($item->location_Out," ")}}"
                          data-lgOut="{{strstr($item->location_Out, " ")}}"
                          data-bs-target="#detail"><i class="fas fa-search-location"></i></i></button>
                        
                        </td>            
                        @endforeach                
                  </tr>    
                </tbody>
              </table>
            
        </div>
          </div>
      </div>
  </div>
  {{-- modalbox --}}
  
  <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail attendance</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <span class="text-success">IN</span>
          <ul class="list-group mb-2">  
            <li class="list-group-item" id="listIn"></li>
            <li class="list-group-item" id="listIn" ></li>
            <li class="list-group-item" id="listIn" ></li>
            <li class="list-group-item" id="listIn"></li>        
          </ul>
          <span class="text-danger">Out</span>
          <ul class="list-group">  
            <li class="list-group-item" id="listOut"></li>
            <li class="list-group-item" id="listOut" ></li>
            <li class="list-group-item" id="listOut" ></li>     
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn btn-sm" data-bs-dismiss="modal"></button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
