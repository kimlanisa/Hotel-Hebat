<x-layoutadmin>
  
                


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

         

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library2">
            <div class="col-lg-12">
             <div class="card-body">
              <div class="card">
                  <div class="card-header">
                    <h4>Tambah Data Kamar</h4>
                  </div>
                  <div class="card-body text-white">
                    <form action="{{route('admin.store')}}" method="POST">
                      @csrf
                    <div class="form-group">
                      <label>Tipe Kamar</label>
                      <input type="text" name="tipe_kamar" class="form-control  @error('tipe_kamar') is-invalid @enderror">
                         @error('tipe_kamar')
                                  {{ $message }}
                            @enderror
                    </div>
                    <div class="form-group">
                      <label>Jumlah Kamar</label>
                      <input type="number" class="form-control @error('jml_kamar') is-invalid @enderror"  name="jml_kamar">
                         @error('jml_kamar')
                                  {{ $message }}
                            @enderror
                    </div>
                         <div  style="text-align: right" class="mt-3">
                          
                      <a href="/admin-kamar" class="button2 btn">Kembali</a>
                     <button class="button2 btn" style="margin-right: 15px">Tambah</button></a>
                    </div>
                    </form>
                  </div>
                </div>
                          </div> 
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>


         

</x-layoutadmin>


