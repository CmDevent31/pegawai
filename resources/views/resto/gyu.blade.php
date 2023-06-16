@extends('layouts.main')

@section('resto')

<style>

.ecommerce-gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
}

.ecommerce-gallery .col-4 {
  flex: 0 0 25%;
  max-width: 25%;
  padding: 0;
}

.ecommerce-gallery img {
  display: block;
  width: 100%;
  height: auto;
  object-fit: cover;
  cursor: pointer;
}


</style>

<div class="row">
  <div class="col-lg-6">
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://tse4.mm.bing.net/th?id=OIP.rpG6pMmIq_lWcNTpD1gBEgHaE7&pid=Api&P=0&h=2000" alt="Gallery image 1" class="ecommerce-gallery-main-img active w-100" data-mdb-toggle="lightbox" />
        </div>
        <div class="carousel-item">
          <img src="https://kiji.life/eats/wp-content/uploads/2017/12/HEI5075-head.jpg" alt="Gallery image 2" class="w-100" />
        </div>
        <div class="carousel-item">
          <img src="https://1.bp.blogspot.com/-pQ9fxkUqEf4/V_9u5jVJcGI/AAAAAAAALmM/5GH_ErLNsw8vE3Ie26QkRBhK42D8DwWzACLcB/s1600/DSCF0676.jpg" alt="Gallery image 3" class="w-100" />
        </div>
        <div class="carousel-item">
          <img src="https://tse2.mm.bing.net/th?id=OIP.ECAo8QGSSzQe3spAfa4aFwHaFP&pid=Api&P=0&h=2000" alt="Gallery image 4" class="w-100" />
        </div>
      </div>
    
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
      <div class="row py-3 shadow-5">
        <div class="col-3 mt-1">
          <img src="https://tse4.mm.bing.net/th?id=OIP.rpG6pMmIq_lWcNTpD1gBEgHaE7&pid=Api&P=0&h=2000" data-mdb-img="https://tse4.mm.bing.net/th?id=OIP.rpG6pMmIq_lWcNTpD1gBEgHaE7&pid=Api&P=0&h=2000" alt="Gallery image 1" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://kiji.life/eats/wp-content/uploads/2017/12/HEI5075-head.jpg" data-mdb-img="https://kiji.life/eats/wp-content/uploads/2017/12/HEI5075-head.jpg" alt="Gallery image 2" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://1.bp.blogspot.com/-pQ9fxkUqEf4/V_9u5jVJcGI/AAAAAAAALmM/5GH_ErLNsw8vE3Ie26QkRBhK42D8DwWzACLcB/s1600/DSCF0676.jpg" data-mdb-img="https://1.bp.blogspot.com/-pQ9fxkUqEf4/V_9u5jVJcGI/AAAAAAAALmM/5GH_ErLNsw8vE3Ie26QkRBhK42D8DwWzACLcB/s1600/DSCF0676.jpg" alt="Gallery image 3" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://tse2.mm.bing.net/th?id=OIP.ECAo8QGSSzQe3spAfa4aFwHaFP&pid=Api&P=0&h=2000" data-mdb-img="https://tse2.mm.bing.net/th?id=OIP.ECAo8QGSSzQe3spAfa4aFwHaFP&pid=Api&P=0&h=2000" alt="Gallery image 4" class="w-100" />
        </div>
      </div>
    </div>
    




{{-- 
    <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
      <div class="row py-3 shadow-5">
        <div class="col-12 mb-1">
          <div class="lightbox">

            <img src="https://tse4.mm.bing.net/th?id=OIP.rpG6pMmIq_lWcNTpD1gBEgHaE7&pid=Api&P=0&h=2000" alt="Gallery image 1" class="ecommerce-gallery-main-img active w-100 "  data-mdb-toggle="lightbox" />
          </div>
        </div>
        <div class="col-3 mt-1">
          
          <img src="https://tse4.mm.bing.net/th?id=OIP.rpG6pMmIq_lWcNTpD1gBEgHaE7&pid=Api&P=0&h=2000" data-mdb-img="https://tse4.mm.bing.net/th?id=OIP.rpG6pMmIq_lWcNTpD1gBEgHaE7&pid=Api&P=0&h=2000" alt="Gallery image 1" class="w-100" />
        </div>
        <div class="col-3 mt-1">
    
          <img src="https://kiji.life/eats/wp-content/uploads/2017/12/HEI5075-head.jpg" data-mdb-img="https://kiji.life/eats/wp-content/uploads/2017/12/HEI5075-head.jpg" alt="Gallery image 2" class="w-100" />
        </div>
        <div class="col-3 mt-1">
      
          <img src="https://1.bp.blogspot.com/-pQ9fxkUqEf4/V_9u5jVJcGI/AAAAAAAALmM/5GH_ErLNsw8vE3Ie26QkRBhK42D8DwWzACLcB/s1600/DSCF0676.jpg" data-mdb-img="https://1.bp.blogspot.com/-pQ9fxkUqEf4/V_9u5jVJcGI/AAAAAAAALmM/5GH_ErLNsw8vE3Ie26QkRBhK42D8DwWzACLcB/s1600/DSCF0676.jpg" alt="Gallery image 3" class="w-100" />
        </div>
        <div class="col-3 mt-1">

          <img src="https://tse2.mm.bing.net/th?id=OIP.ECAo8QGSSzQe3spAfa4aFwHaFP&pid=Api&P=0&h=2000" data-mdb-img="https://tse2.mm.bing.net/th?id=OIP.ECAo8QGSSzQe3spAfa4aFwHaFP&pid=Api&P=0&h=2000" alt="Gallery image 4" class="w-100" />
        </div>
      </div>
    </div>




 --}}


 <a class="btn btn-outline-secondary" href="/home">Kembali</a>
</div>
<div class="col-lg-6">
<div class="card-body">
  <h2 class="card-title">Gyu-Kaku</h2>
      <p class="font-italic">08.00am - 21.00pm | OPEN</p>
      <h4 class="card-title">Location</h4>
      <p class="font-italic">Gyu-kaku AEON Mall Sentul City
        Ground Floor G-42
        Jl. MH. Thamrin, Citaringgul, Kec. Babakan Madang, Bogor, Jawa Barat 16810
        Bogor</p>
      <h4 class="card-title">Brief Description</h4>
      <p class="font-italic">Gyu-Kaku offers a wide range of beef including our best seller Gyu-Kaku Karubi, King Harami, Dragon Karubi and Suki Shabu.</p>
      <h4 class="card-title">Detail Description</h4>
      <p class="font-italic">Open Link: https://gyu-kaku.id/en/home/index</p>
      <dl>
        <h4 class="card-title">Menu Items</h4>
        <dd class="font-italic">STANDARD BUFFET - IDR.239.000++</dd>
        <dd class="font-italic">PREMIUM BUFFET - IDR.429.000++</dd>
        <dd class="font-italic">BIRTHDAY BUFFET - IDR.329.000++</dd>
        <dd class="font-italic">PRIME YAKINIKU SET - IDR.189.000++</dd>
        <dd class="font-italic">BEEF STEAK SET - IDR.129.000++</dd>
      </dl>
      <h4 class="card-title">Detail Regarding Delivery</h4>
      <p class="font-italic">Min. Order of $50</p>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.6.0/css/mdb.min.css" integrity="sha384-GpSrbTmxKIF+ZRV4mtKu2ouLdUNpzwqj8/KHpHsOSlls1qfAr5a+9l9qGw0Iis9S" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.6.0/js/mdb.min.js" integrity="sha384-/1skN5dMIYbq+wsjLFf7M6jPZSYvOMzD3pIjXc7T6w/BtoW6f5CBVMBSBmRlZas1" crossorigin="anonymous"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const gallery = new mdb.Lightbox(document.querySelector('.ecommerce-gallery'));
    gallery.init();
  });
</script>
@endsection
