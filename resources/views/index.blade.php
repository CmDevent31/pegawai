<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="{{ asset('js/app.js') }}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="row mt-2">
                            <div class="col-lg-12 margin-tb">
                                <div class="float-start">
                                </div>
                              </div>
                            </div>
                            <div class="pull-right"><center>
                              <a class="btn btn-success btn-lg" href="/pegawai">Daftar Pegawai Terdaftar</a></center>
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
</body>
<script type="text/javascript">
    $(document).ready(function () {
        $('#table').DataTable({   });
    });
  </script>


<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', confirmDelete);
    });
});
</script>

    <script>
        function confirmDelete(event,id) {
            const deleteUrl = "{{ url('pegawai/hapus') }}/" + this.getAttribute('data-id');
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika tombol "Ya, Hapus" ditekan
                    // Lakukan proses hapus atau tindakan lainnya
                    // ...
                    window.location.href = deleteUrl;
                    showSuccessAlert('Sukses', 'Data berhasil dihapus.');
                } else {
                    // Jika tombol "Batal" ditekan atau SweetAlert ditutup
                    showErrorAlert('Batal', 'Data tidak dihapus.');
                }
            });
        }

        // Fungsi untuk menampilkan SweetAlert sukses
        function showSuccessAlert(title, message) {
            Swal.fire(title, message, 'success');
        }

        // Fungsi untuk menampilkan SweetAlert error
        function showErrorAlert(title, message) {
            Swal.fire(title, message, 'error');
        }
    </script>




    <script>
        // Panggil fungsi deletePegawai saat tombol hapus diklik
        $(document).on('click', '.btn-hapus', function () {
            var id = $(this).data('id');
            deletePegawai(id);
        });
    </script>

</html>
