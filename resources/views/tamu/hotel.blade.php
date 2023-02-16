<x-layout>

  <<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner2">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4>Fasilitas   </h4>
                </div>
                <div class="row">
                @foreach ($fas_hotel as $item)
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="{{ asset('img/'. $item->gambar )}}" alt="">
                    <h4>{{ $item->nama_fas_hotel}}<br><span>{{$item->ket_fas_hotel}}</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                    </ul>
                  </div>
                </div>
                @endforeach
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@push('script')
  <script src="{{ asset('assets/js/pages/sweathapus.js') }}"></script>
  @endpush

</x-layout>



