<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div class="gaming-library3 mt-4">
                        <div class="col-lg-12">
                         <div class="card-body">
                          <div class="card">
                              <div class="card-body text-white">
                                <form action="{{route('store')}}" method="POST">
                                  @csrf
                                <div class="row">
                                  <div class="form-group row">
                                    <div class="col-sm-3">
                                      <p style="text-align: center; color: white;">Tanggal Checkin</p>
                                    <input type="date" class="form-control @error('tgl_checkin') is-invalid @enderror" name="tgl_checkin">
                                     @error('tgl_checkin')
                                              {{ $message }}
                                        @enderror
                                    </div>
                                   <div class="col-sm-3">
                                      <p style="text-align: center; color: white;">Tanggal Checkout</p>
                                    <input type="date" class="form-control @error('tgl_checkout') is-invalid @enderror" name="tgl_checkout">
                                     @error('tgl_checkout')
                                              {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-sm-3">
                                      <p style="text-align: center; color: white;">Jumlah kamar</p>
                                    <input type="number" class="form-control @error('jml_kamar') is-invalid @enderror" name="jml_kamar">
                                     @error('jml_kamar')
                                              {{ $message }}
                                        @enderror
                                    </div>
                                     <!-- <div class="col-sm-3">
                                      <button class="button2 btn" style="margin-top: 30px">Pesan</button>
                                    </div> -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
            
            
                      <!-- ***** Most Popular End ***** -->
            
            
                      <!-- ***** Most Popular Start ***** -->
                     <div class="gaming-library3 mt-4">
                        <div class="col-lg-12">
                         <div class="card-body">
                          <div class="card">
                              <div class="card-header">
                                <h4>Form Pemesanan</h4>
                              </div>
                              <div class="card-body text-white">
                                 <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Pemesan</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" name="nama_pemesan">
                                     @error('nama_pemesan')
                                              {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                               <div class="form-group row mt-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                                     @error('email')
                                              {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                 <div class="form-group row mt-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">No Handphone</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp">
                                     @error('no_telp')
                                              {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Tamu</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control @error('nama_tamu') is-invalid @enderror" name="nama_tamu">
                                     @error('nama_tamu')
                                              {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                 <div class="form-group row mt-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Tipe Kamar</label>
                                    <div class="col-sm-6">
                                     <select class="form-control @error('tipe_kamar') is-invalid @enderror" name="tipe_kamar">
                                      <option selected disabled>-- Pilih Tipe Kamar --</option>
                                        @foreach ( $admin as $row )
                                      <option value="{{ $row->id }}">{{ $row->tipe_kamar}}</option>
                                       @endforeach
                                </select>
                                  @error('tipe_kamar')
                                              {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                </div>
            
                                  <div  style="text-align: left" class="mt-3">
                                 <button class="button2 btn" style="margin-right: 15px">Konfirmasi Pesanan</button></a>
                                </div>
                                </form>
                              </div>
                            </div>
                                      </div>
                        </div>
                      </div>
                      <!-- ***** Most Popular End ***** -->
            
                      <!-- ***** Gaming Library End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>