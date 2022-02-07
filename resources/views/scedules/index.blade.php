@extends('templates./template')
@section('content')
<div class="container-fluid mt-4"  >
  <div class="row mt-3 d-flex justify-content-center">
      <div class="col-md-10">
          <div class="card">
              <div class="card-header">
                  <h5 class="">  <i class="fas fa-outdent"></i> employee attendance form</h5>
              
              </div>
              <div class="row justify-content-center m-2">
                <div class="text-end " > 
                   <?php if(!empty($scedules->Out)) {?>
                  <p class="text-success">status : <i class="fas fa-check-double"></i></p>
                  <?php }?>
                  
                     </div>
                    <div class="col-md-6  mb-2 ">
                        <form action="{{'/scedule'}}" method="post">
                            @csrf
                            
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                      
                                        <input name="date" id="date" value="{{date('l, d-m-Y')}}" type="text" class="form-control text-center id="date" readonly>
                                    </div>
                                </div>
                            </div> 
                          
                            <?php if(empty($scedules->date)){ ?>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="IN" class="form-label">Time iN</label>
                                        <input name="IN" value="{{@old('IN')}}" type="time" class="form-control @error('IN') is-invalid @enderror" id="IN">
                                        @error('IN')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">  
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="location_In" class="form-label">location in</label>
                                        <input name="location_In" value="{{@old('location_In')}}" type="text" class="form-control  @error('location_In') is-invalid @enderror " id="location_In" autocomplete="off" placeholder="enter">
                                        @error('location_In')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                      </div>
                                </div>          
                            </div>   
                            <?php } elseif((!$scedules->Out )) { ?>
                                <input type="hidden" name="idScedule" value="{{ $scedules->idScedule }}">

                                <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="Out" class="form-label">Time Out</label>
                                        <input name="Out" value="{{@old('Out')}}" type="time" class="form-control @error('Out') is-invalid @enderror" id="Out" >
                                        @error('Out')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="location_Out" class="form-label">location out</label>
                                        <input name="location_Out" value="{{@old('location_Out')}}" type="text" class="form-control  @error('location_Out') is-invalid @enderror " id="location_In" autocomplete="off" placeholder="enter">
                                        @error('location_Out')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                </div>               
                             <?php } ?>

                             <?php if(empty($scedules->date)){ ?>
                                <a href="{{'/'}}">
                                    <button type="button" class="btn  float-end m-2" style="background:#d4dad0"><i class="fas fa-backward"></i> Back</button>
                                </a>
                                <button type="submit" class="btn  float-end m-2" style="background:#d4dad0"><i class="fas fa-paper-plane"  ></i>send</button>    
                                <?php }elseif(!$scedules->Out){?>
                                    <a href="{{'/'}}">
                                        <button type="button" class="btn  float-end m-2" style="background:#d4dad0"><i class="fas fa-backward"></i> Back</button>
                                    </a>
                                    <button type="submit" class="btn  float-end m-2" style="background:#d4dad0"><i class="fas fa-paper-plane"  ></i>send</button>    
                              <?php }?>
                            </form>
                           
                    </div>
                    <div class="container" >

                        <div class="row">
                            <input type="hidden" name="ldGeo" id="ldGeo">
                            <input type="hidden" name="lgGeo" id="lgGeo">
                            <div class="col-md-12">
                                <div class="card p-2 " id="mapBox"  >
                                    <div id="map" style="width:100%; height: 400px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
          </div>
      </div>
  </div>
</div>

    @endsection