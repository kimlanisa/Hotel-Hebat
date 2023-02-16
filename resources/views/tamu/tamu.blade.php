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
                <h4><em>Booking</em> HOTEL Here</h4>
                <div class="main-button">
                    <a href="/booking">Booking Now</a>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->
          {{-- <div class="most-popular">
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
                    </div>
                  @endforeach
                </div>
                </div>
              </div>
            </div>
          </div> --}}

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

          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Tipe Kamar</em> Terbaik</h4>
                </div>
                <div class="row">
@foreach ($admin as $item)
<div class="col-lg-3 col-sm-6">
  <div class="item">
    <img src="{{ asset('img/'. $item->gambar )}}" alt="">
    <h4>{{$item->tipe_kamar}}<br><span>{{$item->AdminFasKamar->first()->nama_fasilitas ?? ''}}</span></h4>
    <ul>
      <li><i class="fa fa-star"></i> 4.8</li>
      {{-- <li><i class="fa fa-download"></i> 2.3M</li> --}}
    </ul>
  </div>
</div>

@endforeach
              
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="gaming-library3 mt-4">
            <div class="col-lg-12">
             <div class="card-body">
              <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Type Kamar</h4>
                  </div>
                  <div class="card-body text-white">
                   @foreach ($fas_kamar as $item)
                   <ul>
                    <li>{{$item->nama_fasilitas}}</li>
                  </ul>
                   @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div> --}}



       
      </div>
    </div>
  </div>


   @push('script')
    <script src="{{ asset('assets/js/pages/sweathapus.js') }}"></script>
    @endpush

</x-layout>


