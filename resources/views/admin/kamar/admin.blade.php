<x-layoutadmin>


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">



          <!-- ***** Gaming Library Start ***** -->
      <div class="card card-page shadow">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-color">Data Kamar</h6>
                          </div>
                          <div class="card-body2">
                            <div class="table-responsive" style="margin-left: 10px; margin-right: 10px">
                                <table class="table table-bordered text-white"  id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tipe Kamar</th>
                                            <th>Jumlah Kamar</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($admin as $row)
                                        <tr>
                                            <td>{{$row->tipe_kamar}}</td>
                                            <td>{{$row->jml_kamar}}</td>
                                            <td>
                                            <img src="{{ asset('img/'. $row->gambar )}}"alt="" srcset="" style="width: 200px; height: 300px; object-fit: contain;">
                                            </td>
                                            <td>
                                              <form  action="{{route('admin.destroy', $row->id)}}" method="POST">

                                              <a class="btn btn-sm btn-info btn-circle"  data-toggle="modal" data-target="#exampleModal-{{$row->id}}">
                                                        <i class="fas fa-eye"></i>
                                              </a>
                                              <a class="btn btn-sm btn-success btn-circle"  data-toggle="modal" data-target="#DiexampleModal1-{{$row->id}}">
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
                        <a href="{{route('admin.create')}}" style="text-decoration: none">
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




 @foreach ($admin as $show)
<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$show->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="gaming-library2">
            <div class="col-lg-12">
             <div class="card-body2">
              <div class="card">
                  <div class="card-header">
                    <h4>Tambah Fasilitas Kamar</h4>
                  </div>
                  <div class="card-body text-white">
                   <div class="form-group">
                      <label>Tipe Kamar</label>
                      <input type="text" class="form-control"  value="{{$show->tipe_kamar}}" disabled>
                    </div>
                       <div class="form-group">
                      <label>Jumlah Kamar</label>
                      <input type="text" class="form-control"  value="{{$show->jml_kamar}}" disabled>
                    </div>


                         <div  style="text-align: right">
                        {{-- <a href="{{route('fas-hotel.update', $show->id)}}" style="text-decoration: none">
                     <button class="button2 btn mb-3" style="margin-right: 15px">View</button></a> --}}
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





 @foreach ($admin as $edit)
<!-- Modal -->
<div class="modal fade" id="DiexampleModal1-{{$edit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="gaming-library2">
            <div class="col-lg-12">
             <div class="card-body2">   
              <form action="{{ route('admin.update', $edit->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="card">
                  <div class="card-header">
                    <h4>Edit Kamar</h4>
                  </div>
                  <div class="card-body text-white">
                       <div class="form-group">
                      <label>Tipe Kamar</label>
                      <input type="text" class="form-control @error('tipe_kamar') is-invalid @enderror"  value="{{$edit->tipe_kamar}}" name="tipe_kamar">
                         @error('tipe_kamar')
                                  {{ $message }}
                            @enderror
                    </div>
                      <div class="form-group">
                      <label>Jumlah Kamar</label>
                      <input type="number" class="form-control @error('jml_kamar') is-invalid @enderror"  value="{{$edit->jml_kamar}}" name="jml_kamar">
                         @error('jml_kamar')
                                  {{ $message }}
                            @enderror
                    </div>
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" class="form-control @error('gambar') is-invalid @enderror"  value="{{$edit->gambar}}" name="gambar">
                         @error('gambar')
                                  {{ $message }}
                            @enderror
                            <input type="hidden" name="url" value="{{$edit->gambar}}">
                    </div>


                        <div  style="text-align: right">
                        <a>
                     <button class="button2 btn mb-3" style="margin-right: 15px">Edit</button></a>
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
