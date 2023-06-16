@extends('layouts.main')

@section('resto')


<div class="row">
  <div class="col-lg-6">


    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.restaurant-hospitality.com/sites/restaurant-hospitality.com/files/Marugame%20Udon%20Glendale%20Calif.jpg" alt="Gallery image 3" class="w-100" />
        </div>
        <div class="carousel-item">
          <img src="https://farm5.staticflickr.com/4443/26211698889_fcc1235ef1_b.jpg" alt="Gallery image 1" class="ecommerce-gallery-main-img active w-100" data-mdb-toggle="lightbox" />
        </div>
        <div class="carousel-item">
          <img src="https://seeninthecity.co.uk/wp-content/uploads/2021/07/Marugame-Udon-1-of-1.jpg" alt="Gallery image 2" class="w-100" />
        </div>
        <div class="carousel-item">
          <img src="https://4.bp.blogspot.com/-_fgu0ijZwIU/XHM9ZYLmf0I/AAAAAAAACn8/x9yDsq7-lbkoC8-IG80guzQiNabkmXfYwCLcBGAs/s640/marugame%2Budon.jpg" alt="Gallery image 4" class="w-100" />
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
          <img src="https://www.restaurant-hospitality.com/sites/restaurant-hospitality.com/files/Marugame%20Udon%20Glendale%20Calif.jpg" data-mdb-img="https://www.restaurant-hospitality.com/sites/restaurant-hospitality.com/files/Marugame%20Udon%20Glendale%20Calif.jpg" alt="Gallery image 2" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://farm5.staticflickr.com/4443/26211698889_fcc1235ef1_b.jpg" data-mdb-img="https://farm5.staticflickr.com/4443/26211698889_fcc1235ef1_b.jpg" alt="Gallery image 1" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://seeninthecity.co.uk/wp-content/uploads/2021/07/Marugame-Udon-1-of-1.jpg" alt="Gallery image 3" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://4.bp.blogspot.com/-_fgu0ijZwIU/XHM9ZYLmf0I/AAAAAAAACn8/x9yDsq7-lbkoC8-IG80guzQiNabkmXfYwCLcBGAs/s640/marugame%2Budon.jpg" 
          data-mdb-img="https://4.bp.blogspot.com/-_fgu0ijZwIU/XHM9ZYLmf0I/AAAAAAAACn8/x9yDsq7-lbkoC8-IG80guzQiNabkmXfYwCLcBGAs/s640/marugame%2Budon.jpg" alt="Gallery image 4" class="w-100" />
        </div>
      </div>
    </div>
    


{{-- 
    <aside class="col-lg-6">
      <div class="border rounded-4 mb-3 d-flex justify-content-center">
        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
          <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" />
        </a>
      </div>
      <div class="d-flex justify-content-center mb-3">
        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" class="item-thumb">
          <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" />
        </a>
        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" class="item-thumb">
          <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" />
        </a>
        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big3.webp" class="item-thumb">
          <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big3.webp" />
        </a>
        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" class="item-thumb">
          <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" />
        </a>
        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" class="item-thumb">
          <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" />
        </a>
      </div>
      <!-- thumbs-wrap.// -->
      <!-- gallery-wrap .end// -->
    </aside> --}}


    
<a class="btn btn-outline-secondary" href="/home"> Kembali</a>
  </div>
  <div class="col-lg-6">

      <div class="card-body">
        <h2 class="card-title">Marugame Udon</h2>
        <p class="font-italic">08.00am - 21.00pm | OPEN</p>
        <h4 class="card-title">Location</h4>
        <p class="font-italic">Marugame Udon
            Jl. Buah Batu No.157</p>
        <h4 class="card-title">Brief Description</h4>
        <p class="font-italic">Marugame Udon adalah Udon & Tempura terbaik dari Jepang. Semua resep yang digunakan merupakan resep asli dari Marugame Jepang.</p>
        <h4 class="card-title">Detail Description</h4>
        <p class="font-italic">Open Link : https://marugameudon.co.id/</p>
        <dl>
        <h4 class="card-title">Menu Items</h4>
            <dd class="font-italic">Niku Udon  -  IDR.54.000++</dd>
            <dd class="font-italic">Beef Curry Udon  -  IDR.54.000++</dd>
            <dd class="font-italic">Chicken Katsu Curry Udon  -  IDR.51.000++</dd>
            <dd class="font-italic">Kitsune Udon  -  IDR.41.000++</dd>
            <dd class="font-italic">Abura Udon  -  IDR.45.000++</dd>
        </dl> 
        <h4 class="card-title">Detail Regarding Delivery</h4>
        <p class="font-italic">Min. Order of $50</p>
      </div>
    </div>
  </div>
</div>
@endsection