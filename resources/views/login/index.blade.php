<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>app</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('asset/dist/css/adminlte.min.css') }}"> 
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('asset/plugins/toastr/toastr.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-5 mt-5">   
        <div class="card  rounded justify-content-center text-light" >
            <div class=" login-logo mx-auto mt-5">
                <img src="{{asset('img/logo.png')}} " alt="Logo" class="float-left" style="opacity: 17" width="313px"
                    height="100px" class="img-thumbnail">
            </div>
            <div class="card-body login-card-body m-3" >
                <form action="{{ url('/sigIn') }}" method="post">
                    @csrf
                    <div class="input-group ">
                        <input type="email" class="form-control @error('email') is-invalid @enderror "
                            placeholder="email" name="email" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group mt-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror "
                            placeholder="Password" name="password" autocomplete="off">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-block" style="background:#87dd5c" >Sig
                                IN</button>
                                <a href="{{'registrasi'}}">SignUp</a>
                        </div>
                   
                    </div>
                </form>
            </div>
        </div> 
</div>
</div>
</div>
  
    <!-- jQuery -->
    <script src="{{ asset('asset/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('asset/toastr/toastr.min.js') }}"></script>
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