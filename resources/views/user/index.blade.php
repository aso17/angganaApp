@extends('templates./template')
@section('content')
 
 <div class="content-wrapper">
 
  <div class="content">
      <div class="container">

          <div class="row mt-3">
              <div class="col-lg-12">
                  <div class="card card-primary card-outline">

                      <div class="card-header">
                        <h5> <i class="fas fa-outdent"></i> instruction</h5>
                      </div>
                      <div class="card-body">

                          <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                              class="scrollspy-example mt-3" tabindex="0">
                              <h5 id="list-item-1 " class="text-info"></h5>
                              <p>Aplikasi ini
                                menggunakan beberapa plugin yang mengharuskan terkoneksi ke internet</p>
                              <h5 id="list-item-2" class="text-info">Absensi</h5>
                              <p>Absensi setiap karyawan hanya bisa di lakukan satu kali setiap / tanggal sekarng </p>
                              
                              <h5 id="list-item-3" class="text-info">Employees</h5>
                              <p>This menu is used to view all registered employees</p>
                              <h5 id="list-item-4" class="text-info">Attendace
                              </h5>
                              <p>The menu is used to view the attendance of each date from each user </p>
                          </div>
                      </div>

                  </div>
                  
                    <form action="{{'/contoh'}}" method="post">
                        @csrf
                      <div class="input-group mb-3">
                          <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="barang[]" value="ciki" aria-label="Checkbox for following text input">
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                      <div class="input-group mb-3">
                          <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="barang[]" value="roti" aria-label="Checkbox for following text input">
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                  <button type="submit">kirim</button>
                    </form>
              </div>
          </div>

      </div>
  </div>


 
</div>
<script>

</script>


@endsection
