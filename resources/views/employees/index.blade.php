@extends('templates./template')
@section('content')
<div class="container-fluid mt-4" >
  <div class="row mt-3 d-flex justify-content-center">
      <div class="col-md-10">
          <div class="card">
              <div class="card-header ">
                  <h5> <i class="fas fa-outdent"></i> Employee list</h5>
              </div>
              <div class="table-responsive">    
              <table class="table table-sm text-center" id="employees" >
                <thead>

                  <tr>
                    <th style="width: 5px">#</th>
                    <th >nip </th>
                    <th >fullname</th>
                    <th >addres</th>
                    <th >absensi</th>        
                    <th style="width: 10px">Action</th>         
                  </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        
                    <tr>   
                        <td>{{$loop->iteration}}.</td>
                        <td>{{$employee->nipEmployees}}</td>
                        <td>{{$employee->fullName}} </td>
                        <td>{{$employee->domicile}}</td>
                        <td>
                    <?php if(empty($employee->IN)){ ?>
                      <span class="badge text-danger " style="background-color: #d4dad0">null</span>                
                      <?php } elseif(!empty($employee->Out))  {?>
                        <span class="badge text-success" style="background-color: #d4dad0">finished</span>
                        <?php }else {?>
                          <span class="badge text-success" style="background-color: #d4dad0">IN</span>

                      <?php }?>
                        </td>
                        <td>
                          <button class="btn btn" id="employe" style="background:#d4dad0" data-bs-toggle="modal"    
                          data-namaa="{{$employee->fullName}}"
                          data-addres="{{$employee->domicile}}"
                          data-nip="{{$employee->nipEmployees}}"
                          data-phone="{{$employee->phoneNumber}}"
                          data-jamMasukk="{{$employee->IN}}"
                          data-jamKeluarr="{{$employee->Out}}"
                          data-ldd="{{strtok($employee->location_In," ")}}"
                          data-lgg="{{strstr($employee->location_In, " ")}}"
                          data-ldOutt="{{strtok($employee->location_Out," ")}}"
                          data-lgOutt="{{strstr($employee->location_Out, " ")}}"
                          data-bs-target="#emp"><i class="fas fa-search-location"></i></i></button>
                            
                        </td>
                        @endforeach    
                   
                  </tr>    
                </tbody>
              </table>
            
        </div>
          </div>
      </div>
  </div>
</div>
 {{-- modalbox --}}
  
 <div class="modal fade" id="emp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Employee and Absensi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <ul class="list-group mb-2">  
          <li class="list-group-item" id="listEmp"></li>
          <li class="list-group-item" id="listEmp" ></li>
          <li class="list-group-item" id="listEmp" ></li>
          <li class="list-group-item" id="listEmp"></li>        
        </ul>
        <span class="text-success">IN</span>
        <ul class="list-group mb-2">  
         
          <li class="list-group-item" id="listInn" ></li>
          <li class="list-group-item" id="listInn" ></li>
          <li class="list-group-item" id="listInn"></li>        
        </ul>
        <span class="text-danger">Out</span>
        <ul class="list-group">  
          <li class="list-group-item" id="listOutt"></li>
          <li class="list-group-item" id="listOutt" ></li>
          <li class="list-group-item" id="listOutt" ></li>     
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

