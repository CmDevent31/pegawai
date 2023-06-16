import './bootstrap';
import $ from 'jquery';
import 'datatables.net';
import 'datatables.net-bs5';
import swal from 'sweetalert';
import Swal from 'sweetalert2';

window.Swal = Swal;
require('./bootstrap');
require('./sweetalert');


$(document).ready(function () {
    $('#table').DataTable({
        processing: true,
        serverSide: false,
        paging: false,
        info: false,
        ajax: {
            "url": "{{ route('/pegawai') }}",
            data: function (d) {
                d.cari = $('input[name=cari]').val();
            }
        },
        columns: [
            { data: 'pegawai_nama', name: 'pegawai_nama' },
            { data: 'pegawai_jabatan', name: 'pegawai_jabatan' },
            { data: 'pegawai_umur', name: 'pegawai_umur' },
            { data: 'pegawai_alamat', name: 'pegawai_alamat' },
            { data: 'aksi', name: 'aksi', orderable: false, searchable: false }
        ]
    });
});

window.deleteConfirm = function (e) {
    e.preventDefault();
    var form = e.target.form;
    swal({
        title: "Are you sure you want to delete?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            form.submit();
        }
      });
}