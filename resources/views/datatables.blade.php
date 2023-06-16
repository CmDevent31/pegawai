
<div class="container mt-1">
    <div class="row">
        
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="row mt-4">
                           
                                </div>
                              </div>
                            </div>
                            <div class="pull-right"><center>
                                <a class="btn btn-success btn-lg">Daftar Pegawai Terdaftar</a></center>
                              <div class="float-end">
                                  <div class="card mt-0">
                                      <div class="input-group">
                                          
                                      </div>
                                  </div>
                              </div>
                            <a class="btn btn-primary" href="/pegawai/tambah">Tambah Pegawai Baru</a>
                            <div class="container mt-2">
                        </div>
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="table-responsive-lg">
                            <table id="table" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach($pegawai as $p)
                                    <tr>
                                        <td>{{ $p->pegawai_nama }}</td>
                                        <td>{{ $p->pegawai_jabatan }}</td>
                                        <td>{{ $p->pegawai_umur }}</td>
                                        <td>{{ $p->pegawai_alamat }}</td>
                                        <td>
                                            <a class="btn btn-secondary btn-sm"
                                               href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                                               |
                                            <a class="btn btn-danger btn-sm delete-btn" data-id="{{ $p->pegawai_id }}"  href="javascript:void(0);" onclick="confirmDelete(event, {{ $p->pegawai_id }})">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                          </div>
                          @stack('scripts')                     
                          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                          <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
                          <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
                          
                          <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                          <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
                          <script src="{{ asset('js/app.js') }}"></script>
                          
                          {{ $pegawai->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

