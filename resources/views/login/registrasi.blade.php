<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Apps</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('asset/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/toastr/toastr.min.css') }}">

</head>
<body class="bg-light">  
<div class="container bg-dark ">
    <div class="row  ">
        <div class="col-md-12 ">
            <div class="card mt-3">
                <div class="card-header">
                    <img src="{{asset('/img/logo.png')}}" alt="" width="200px">
                    <h5 class="text-center"><i class="fas fa-indent"></i> Form Registrasi</h5>
                </div>
                <form action="{{'/registrasi'}}" method="post">
                    @csrf
                    <div class="row mt-2 justify-content-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nipEmployees" class="form-label">Number Employee</label>
                                <input name="nipEmployees" value="{{@old('nipEmployees')}}" type="text" class="form-control @error('nipEmployees') is-invalid @enderror" id="nipEmployees" autocomplete="off">
                                @error('nipEmployees')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                              </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input name="fullName" value="{{@old('fullName')}}" type="text" class="form-control @error('fullName') is-invalid @enderror" id="fullname"  autocomplete="off">
                                @error('fullName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email</label>
                              <input name="email" value="{{@old('email')}}" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"  autocomplete="off">
                              @error('email')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                     <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input name="phoneNumber" value="{{@old('phoneNumber')}}" type="number" class="form-control  @error('phoneNumber') is-invalid @enderror " id="phoneNumber"  autocomplete="off">
                                @error('phoneNumber')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                              </div>
                        </div>
                    <div class="row justify-content-center">  
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input name="password"  type="password" class="form-control  @error('password') is-invalid @enderror" id="exampleInputPassword1">
                              @error('password')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="domicile" class="form-label">Addres</label>
                                <div class="form-floating">
                                    <textarea class="form-control  @error('domicile') is-invalid @enderror" name="domicile" value="{{@old('domicile')}}" placeholder="Address" id="floatingTextarea2" style="height: 100px"></textarea>
                                    @error('domicile')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div> 
                              </div>
                              <div class="row justify-content-center">
                                  <div class="col-md-6">

                                      <a href="{{'/login'}}">
                                        <button type="button" class="btn btn-sm float-right m-2" style="background:#d4dad0"><i class="fas fa-backward"></i> cancel</button>
                                    </a>
                                    <button type="submit" class="btn btn-sm float-right m-2" style="background:#d4dad0"><i class="fas fa-paper-plane"  ></i> Registrasi</button>    
                                    
                                </div>
                            </div>
                  </form>

            </div>
        </div>
    </div>
</div>

    <!-- jQuery -->
    <script src="{{ asset('asset/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('asset/dist/js/adminlte.min.js') }}"></script>
   
    <!-- Toastr -->
    <script src="{{ asset('asset/plugins/toastr/toastr.min.js') }}"></script>
    <script language="JavaScript" type="text/javascript">
    toastr.options = {
        "closeButton": false,
        "debug": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-center mt-3",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "10000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    </script>
    @if (session('success'))
    <script language="JavaScript" type="text/javascript">
    toastr.success("{{ session('success') }}");
    </script>

    @endif

    @if (session('info'))
    <script>
    toastr.info("{{ session('info') }}");
    </script>

    @endif
    @if (session('warning'))
    <script>
    toastr.warning("{{ session('warning') }}");
    </script>

    @endif
    @if (session('error'))
    <script>
    toastr.error("{{ session('error') }}");
    </script>

    @endif
</body>

</html>