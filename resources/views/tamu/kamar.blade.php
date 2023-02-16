<x-layout>


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

            <div class="most-popular">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="heading-section">
                      <h4>Tipe Kamar</h4>
                    </div>
                    {{-- <div class="main-banner2">
                        <div class="row">
                          <div class="col-lg-7">
                            <div class="header-text">
                            </div>
                          </div>
                        </div>
                    </div> --}}
                    <div class="gaming-library3 mt-4">
                     @foreach ($kamar as $item)
                     <div class="col-lg-12 mb-3">
                      <div class="card-body">
                       <div class="card">
                           <div class="card-header">
                             <h4 class="text">{{$item->tipe_kamar}}</h4>
                           </div>
                           <div class="card-body">
                            <h6>Fasilitas:</h6>
                             <p class="text-white">
                              {{ $item->AdminFasKamar->first()->nama_fasilitas ?? '' }}
                             </p>
                             <div class="item mt-4">
                              <img src="{{ asset('img/'. $item->gambar )}}" alt="">
                            </div>
                           </div>
                         </div>
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

   @push('script')
    <script src="{{ asset('assets/js/pages/sweathapus.js') }}"></script>
    @endpush


</x-layout>



