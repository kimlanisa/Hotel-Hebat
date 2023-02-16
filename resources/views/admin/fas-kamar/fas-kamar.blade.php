<x-layoutadmin>
  

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

         

          <!-- ***** Gaming Library Start ***** -->
      <div class="card card-page shadow">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-color">Data Fasilitas Kamar</h6>
                          </div>
                          <div class="card-body2">
                            <div class="table-responsive" style="margin-left: 10px; margin-right: 10px">
                                <table class="table table-bordered text-white"  id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tipe Kamar</th>
                                            <th>Nama Fasilitas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                          @foreach ($fas_kamar as $row)
                                        <tr>
                                          
                                            <td>{{$row->AdminKamar->tipe_kamar ?? ''}}</td>
                                            <td>{{$row->nama_fasilitas}}</td>
                                           
                                            <td>
                                              {{-- <a class="btn btn-sm btn-info btn-circle"  data-toggle="modal" data-target="#exampleModal-{{$row->id}}">
                                                        <i class="fas fa-eye"></i>
                                              </a> --}}
                                              <form action="{{route('fas-kamar.destroy', $row->id)}}" method="POST">

                                              <a class="btn btn-sm btn-success btn-circle"  data-toggle="modal" data-target="#exampleModal-{{$row->id}}">
                                                        <i class="fas fa-edit"></i>
                                              </a>
                                                @csrf @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger btn-circle">
                                                  <i class="fas fa-trash"></i>
                                                </button>
                                                </form>
                                            </td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                          </div> 
                          <div  style="text-align: right">
                        <a href="{{route('fas-kamar.create')}}" style="text-decoration: none">
                     <button class="button2 btn mb-3" style="margin-right: 15px">Tambah</button></a>
                    </div>
                        </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>

 @push('script')
    <script src="{{ asset('assets/js/pages/sweathapus.js') }}"></script>
    @endpush
</x-layoutadmin>

@foreach ($fas_kamar as $edit)
<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$edit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="gaming-library2">
            <div class="col-lg-12">
             <div class="card-body2">   
              <form action="{{ route('fas-kamar.update', $edit->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="card">
                  <div class="card-header">
                    <h4>Edit Fasilitas</h4>
                  </div>
                  <div class="card-body text-white">
                   <div class="form-group">
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
                      <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror"  value="{{$edit->nama_fasilitas}}" name="nama_fasilitas">
                         @error('nama_fasilitas')
                                  {{ $message }}
                            @enderror
                    </div>
                      


                        <div  style="text-align: right">
                        <a>
                     <button class="button2 btn mb-3" style="margin-right: 15px">Tambah</button></a>
                    </div>
                    </form>
                  </div>
                </div>
                          </div> 
            </div>
                          </div> 
    </div>
  </div>
</div>

@endforeach

 