<x-layoutresepsionis>
    
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
            <div class="card">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-color">Data Fasilitas Hotel </h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive" style="margin-left: 10px; margin-right: 10px">
                      <table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                <th>Nama Tamu</th>
                                  <th>Tanggal Cek In</th>
                                  <th>Tanggal Cek Out</th>
                                  <th>Jumlah Pesan</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
                </div> 
                <div  style="text-align: right">
              <a href="{{route('fas-hotel.create')}}" style="text-decoration: none">
           <button class="button2 btn mb-3" style="margin-right: 15px">Tambah</button></a>
          </div>
              </div>
<!-- ***** Gaming Library End ***** -->
</div>
</div>
        </div>
      </div>
    </div>
  </div>

  @push('script')
      <script>
        var datatable = $('#dataTable').DataTable({
          processing: true,
          serverSide: true,
          ordering: true,
          ajax: {
                url: '{{ route('resepsionis.index') }}',
            },
            columns: [
                { data: 'nama_tamu', name: 'nama_tamu' },
                { data: 'tgl_checkin', name: 'tgl_checkin' },
                { data: 'tgl_checkout', name: 'tgl_checkout' },
                { data: 'jml_kamar', name: 'jml_kamar' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        })
      </script>
  @endpush

</x-layoutresepsionis>

@foreach ($tamu as $show)
<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$show->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="gaming-library2">
            <div class="col-lg-12">
             <div class="card-body2">
              <div class="card">
                  <div class="card-header">
                    <h4>View Fasilitas Kamar</h4>
                  </div>
                  <div class="card-body text-white">
                   <div class="form-group">
                      <label>Nama Tamu</label>
                      <input type="text" class="form-control"  value="{{$show->nama_tamu}}" disabled>
                    </div>
                       <div class="form-group">
                      <label>Tanggal Cek In</label>
                      <input type="text" class="form-control"  value="{{$show->tgl_checkin}}" disabled>
                    </div>
                       <div class="form-group">
                      <label>Tanggal Cek Out</label>
                      <input type="text" class="form-control"  value="{{$show->tgl_checkout}}" disabled>
                    </div>
                       <div class="form-group">
                      <label>No Telpon</label>
                      <input type="text" class="form-control"  value="{{$show->no_telp}}" disabled>
                    </div>
                       <div class="form-group">
                      <label>Tipe Kamar</label>
                      <input type="text" class="form-control"  value="{{$show->AdminKamar->tipe_kamar}}" disabled>
                    </div>


                         <div  style="text-align: right">
                        {{-- <a href="{{route('fas-hotel.update', $show->id)}}" style="text-decoration: none">
                     <button class="button2 btn mb-3" style="margin-right: 15px">Tambah</button></a> --}}
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
