<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                
                      <div class="gaming-library3 mt-4">
                        <div class="col-lg-12">
                         <div class="card-body">
                            <div class="card">
                                <div class="card-body2 mx-4">
                                  <div class="container">
                                    <p class="my-5 mx-5 text-white" style="font-size: 30px;">Thank for your purchase</p>
                                    <div class="row">
                                      <ul class="list-unstyled">
                                        <li class="text-white">{{$invoice->nama_tamu}}</li>
                                        <li class="text-muted mt-1"><span class="text-white">Invoice</span> {{$invoice->code}}</li>
                                      </ul>
                                      <hr>
                                      <div class="col-xl-10">
                                        <p class="text-white">Tanggal Cek In</p>
                                      </div>
                                      <div class="col-xl-2">
                                        <p class="float-end text-white">{{$invoice->tgl_checkin}}
                                        </p>
                                      </div>
                                      <hr>
                                    </div>
                                    <div class="row">
                                      <div class="col-xl-10">
                                        <p class="text-white">Tanggal Cek Out</p>
                                      </div>
                                      <div class="col-xl-2">
                                        <p class="float-end text-white">{{$invoice->tgl_checkout}}
                                        </p>
                                      </div>
                                      <hr>
                                    </div>
                                    <div class="row">
                                      <div class="col-xl-10">
                                        <p class="text-white">Tipe Kamar</p>
                                      </div>
                                      <div class="col-xl-2">
                                        <p class="float-end text-white">{{$invoice->AdminKamar->tipe_kamar}}
                                        </p>
                                      </div>
                                      <hr style="border: 2px solid white;">
                                    </div>
                                    <div class="row">
                                      <div class="col-xl-10">
                                        <p class="text-white">Jumlah Kamar</p>
                                      </div>
                                      <div class="col-xl-2">
                                        <p class="float-end text-white">{{$invoice->jml_kamar}}
                                        </p>
                                      </div>
                                      <hr style="border: 2px solid white;">
                                    </div>
                                    {{-- <div class="row text-black">
                              
                                      <div class="col-xl-12">
                                        <p class="float-end fw-bold">Total: $10.00
                                        </p>
                                      </div>
                                      <hr style="border: 2px solid black;">
                                    </div> --}}
                                   
                              
                                  </div>
                                </div>
                              </div>
                          </div> 
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>