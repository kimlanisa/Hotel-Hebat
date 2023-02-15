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
                    <h4>Tambah Fasilitas Kamar</h4>
                  </div>
                  <div class="card-body text-white">
                    <form action="{{route('fas-hotel.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                   <div class="form-group">
                      <label>Nama Fasilitas</label>
                      <input type="text" class="form-control @error('nama_fas_hotel') is-invalid @enderror"  name="nama_fas_hotel">
                         @error('nama_fas_hotel')
                                  {{ $message }}
                            @enderror
                    </div>
                       <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" class="form-control @error('ket_fas_hotel') is-invalid @enderror"  name="ket_fas_hotel">
                         @error('ket_fas_hotel')
                                  {{ $message }}
                            @enderror
                    </div>
                      <div class="form-group">
                      <label>Image</label>
                      <input type="file" class="form-control @error('gambar') is-invalid @enderror"  name="gambar">
                         @error('gambar')
                                  {{ $message }}
                            @enderror
                    </div>


                         <div  style="text-align: right" class="mt-3">
                      <a href="/admin-fas-hotel" class="button2 btn">Kembali</a>
                     <button class="button2 btn" style="margin-right: 15px">Tambah</button></a>
                    </div>
                    </form>
                  </div>
                </div>
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


