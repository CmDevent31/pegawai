<div class=" mt-4">
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  <footer>
   <!-- Remove the container if you want to extend the Footer to full width. -->
    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #ffa811"
            >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <img src="https://clipground.com/images/wattpad-logo-1.png" class="rounded float-left" width="200" height="200" alt="Malas Ngoding"></a> 
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold text-left">Products</h6>
              <p class="text-left">
                <a class="text-white">MDBootstrap</a>
              </p>
              <p class="text-left">
                <a class="text-white">MDWordPress</a>
              </p>
              <p class="text-left">
                <a class="text-white">BrandFlow</a>
              </p>
              <p class="text-left">
                <a class="text-white">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold text-left">
                Useful links
              </h6>
              <p class="text-left">
                <a class="text-white">Your Account</a>
              </p>
              <p class="text-left">
                <a class="text-white">Become an Affiliate</a>
              </p>
              <p class="text-left">
                <a class="text-white">Shipping Rates</a>
              </p>
              <p class="text-left">
                <a class="text-white">Help</a>
              </p>
            </div>
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-4 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold text-right">Feel free to send us a message</h6>
              <p class="text-right"><i class="bi bi-house-fill"></i> Bandung, Indonesia</p>
              <p class="text-right"><i class="bi bi-envelope-at-fill"></i> info@gmail.com</p>
            </div>
            <!-- Grid column -->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
  
        <hr class="my-3 ">
  
        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3 text-left">
                © 2020 Copyright
                <a class="text-white" href="https://mdbootstrap.com/"
                   ></a
                  >
              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
             
              <!-- Twitter -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button" href="https://twitter.com/wattpad?s=20"
                 ><i class="bi bi-twitter"></i></a>
  
              <!-- Google -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button" href="https://www.wattpad.com/?locale=id_ID"
                 ><i class="bi bi-google"></i></a>
  
              <!-- Instagram -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button" href="https://www.instagram.com/wattpad/"
                 ><i class="bi bi-instagram"></i></a>
            </div>
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
  </footer>
  

{{-- script untuk datatables --}}
<script type="text/javascript">
  $(document).ready(function () {
      $('#table').DataTable({   });
  });
</script>

{{-- script untuk button delete --}}
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