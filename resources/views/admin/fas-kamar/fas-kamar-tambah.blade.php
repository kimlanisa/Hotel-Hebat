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
                    <form action="{{route('fas-kamar.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group">
                      <label>Tipe Kamar</label>
                   <select class="form-control @error('tipe_kamar_id') is-invalid @enderror" name="tipe_kamar_id">
                          <option selected disabled>-- Pilih Tipe Kamar --</option>
                            @foreach ( $admin as $row )
                          <option value="{{ $row->id }}">{{ $row->tipe_kamar}}</option>
                           @endforeach
                    </select>
                       @error('tipe_kamar_id')
                        {{ $message }}
                        @enderror
                    </div>
                       <div class="form-group">
                      <label>Nama Fasilitas</label>
                      <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror"  name="nama_fasilitas">
                         @error('nama_fasilitas')
                                  {{ $message }}
                            @enderror
                    </div>
        
                         <div  style="text-align: right" class="mt-3">
                          
                      <a href="/admin-fas-kamar" class="button2 btn">Kembali</a>
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


