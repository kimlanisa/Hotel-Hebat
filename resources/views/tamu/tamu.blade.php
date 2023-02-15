<x-layout>
  

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner2">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text mt-4">
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                    <h4>Fasilitas Hotel</h4>
                </div>
                <div class="row">
                  @foreach ($fas_hotel as $item)
                  <div class="col-lg-4 col-sm-6">
                    <div class="item">
                      <img src="{{asset('img/'. $item->gambar)}}" alt="">
                      <h4>{{$item->nama_fas_hotel}}<br><span>{{$item->ket_fas_hotel}}</span></h4>
                      {{-- <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul> --}}
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <div class="gaming-library3 mt-4">
            <div class="col-lg-12">
             <div class="card-body">
              <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Fasilitas Kamar</h4>
                  </div>
                  <div class="card-body text-white">
                    <h4>Delux</h4>
                   @foreach ($fas_kamar as $item)
                   <ul>
                    <li>{{$item->nama_fasilitas}}</li>
                  </ul>
                   @endforeach
                  </div>
                </div>
              </div> 
            </div>
          </div>

          <div class="gaming-library3 mt-4">
            <div class="col-lg-12">
             <div class="card-body">
              <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Tentang Kami</h4>
                  </div>
                  <div class="card-body text-white">
                    <p>Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati
                      sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau. Kid's club yang
                      luas menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention
                      kami, dilengkapi pelayanan lengkap dengan ruangan konversi terbesar di Bandung, mampu mengakomodasi hingga 3.000
                      delegasi. Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara adat yang mewah
                    </p>
                  </div>
                </div>
              </div> 
            </div>
          </div>

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


   @push('script')
    <script src="{{ asset('assets/js/pages/sweathapus.js') }}"></script>
    @endpush

</x-layout>



 