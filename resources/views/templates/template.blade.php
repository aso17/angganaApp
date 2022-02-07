<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- mycss --}}
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}" />
    {{-- fontAwsome --}}
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    {{-- bootstrup --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- ajax --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- data tables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" /> 
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('asset/plugins/toastr/toastr.min.css') }}">
      {{-- maps --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    {{-- end maps --}}
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>app</title>
  </head>
  <body class="bg-light"  onload="getlocation()">
    <nav>
      <div class="logo"><img src="{{asset('img/logo.png')}}" alt=""></div>
      <ul>
        <li><a href="{{url('/')}}"> <button class="btn btn-sm">Home</button> </a></li>
        <li><a href="{{url('/employees')}}"> <button class="btn btn-sm">Employees</button></a></li> 
        <li><a href="{{url('/scedule')}}"><button class="btn btn-sm" id="locationAbsen">Absensi</button> </a></li>
        <li><a href="{{url('/historyScedule')}}"><button class="btn btn-sm">Attendance</button></a></li>
        <li><a href="{{url('/help')}}"><button class="btn btn-sm">Help</button></a></li>
        <li><a href="{{url('/logOut')}}"><button class="btn btn-sm"><i class="fas fa-sign-out-alt text-danger"></i>Logout</button></a></li>
      </ul>

      <div class="toggle-menu">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
    <div class="containt">
        @yield('content')
    </div>
    <script src="{{asset('js/maps.js')}}"></script>
    <script src="{{asset('js/attend.js')}}"></script>
    <script src="{{asset('js/employee.js')}}"></script>
    {{-- bootstrup --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    {{-- maps --}}
    <!-- Sweetalert -->
    <script src="{{ asset('asset/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('asset/plugins/toastr/toastr.min.js') }}"></script>
    {{-- myjs --}}
    
    
   <script>
      $(document).ready(function() {
            $('#employees').DataTable({
                "info": true,
                "paging": false,
                "responsive": true,
                "autoWidth": true,
                "lengthChange": true,
                // "responsive": true,
              
               
            });
        });
      $(document).ready(function() {
            $('#scedule').DataTable({
                "info": true,
                "paging": false,
                "responsive": true,
                "autoWidth": true,
                "lengthChange": true,
                // "responsive": true,
              
               
            });
        });
       
   </script>
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
