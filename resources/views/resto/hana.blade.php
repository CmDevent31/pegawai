@extends('layouts.main')

@section('resto')


<div class="row">
  <div class="col-lg-6">
   
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.hanamasaresto.com/photos/shares/HanamasaLocation/LB-1.JPG" alt="Gallery image 1" class="ecommerce-gallery-main-img active w-100" data-mdb-toggle="lightbox" />
        </div>
        <div class="carousel-item">
          <img src="https://upload.crazfood.com/photos/1/1704170420543" alt="Gallery image 3" class="w-100" />
        </div>
        <div class="carousel-item">
          <img src="https://assets-pergikuliner.com/Amh5qLMUKNbQ01-fG-6eFHqofN4=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/image/picture/893310/picture-1524118937.jpg" alt="Gallery image 2" class="w-100" />
        </div>
        <div class="carousel-item">
          <img src="https://4.bp.blogspot.com/-G3M4JylBWPs/WeCPcWSG6AI/AAAAAAAALI8/qlI-hooDvoU0LVZZ-LALdu1MA6x6vuJKACLcBGAs/s1600/Lindaleenk-Hanamasa-Review-5.jpegg" alt="Gallery image 4" class="w-100" />
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
          <img src="https://www.hanamasaresto.com/photos/shares/HanamasaLocation/LB-1.JPG" data-mdb-img="https://www.hanamasaresto.com/photos/shares/HanamasaLocation/LB-1.JPG" alt="Gallery image 1" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://upload.crazfood.com/photos/1/1704170420543" data-mdb-img="https://upload.crazfood.com/photos/1/1704170420543" alt="Gallery image 2" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://assets-pergikuliner.com/Amh5qLMUKNbQ01-fG-6eFHqofN4=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/image/picture/893310/picture-1524118937.jpg" alt="Gallery image 3" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://4.bp.blogspot.com/-G3M4JylBWPs/WeCPcWSG6AI/AAAAAAAALI8/qlI-hooDvoU0LVZZ-LALdu1MA6x6vuJKACLcBGAs/s1600/Lindaleenk-Hanamasa-Review-5.jpegg" 
          data-mdb-img="https://4.bp.blogspot.com/-G3M4JylBWPs/WeCPcWSG6AI/AAAAAAAALI8/qlI-hooDvoU0LVZZ-LALdu1MA6x6vuJKACLcBGAs/s1600/Lindaleenk-Hanamasa-Review-5.jpegg" alt="Gallery image 4" class="w-100" />
        </div>
      </div>
    </div>
   
   
   
   
   
    {{-- <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
      <div class="row py-3 shadow-5">
        <div class="col-12 mb-1">
          <div class="lightbox">
            <img
              src="https://www.hanamasaresto.com/photos/shares/HanamasaLocation/LB-1.JPG"
              alt="Gallery image 1"
              class="ecommerce-gallery-main-img active w-100"
            />
          </div>
        </div>
        <div class="col-3 mt-1">
          <img
            src="https://www.hanamasaresto.com/photos/shares/HanamasaLocation/LB-1.JPG"
            data-mdb-img="https://www.hanamasaresto.com/photos/shares/HanamasaLocation/LB-1.JPG"
            alt="Gallery image 1"
            class="w-100"
          />
        </div>
        <div class="col-3 mt-1">
          <img
            src="https://upload.crazfood.com/photos/1/1704170420543"
            data-mdb-img="https://upload.crazfood.com/photos/1/1704170420543"
            alt="Gallery image 2"
            class="w-100"
          />
        </div>
        <div class="col-3 mt-1">
          <img
            src="https://assets-pergikuliner.com/Amh5qLMUKNbQ01-fG-6eFHqofN4=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/image/picture/893310/picture-1524118937.jpg"
            data-mdb-img="https://assets-pergikuliner.com/Amh5qLMUKNbQ01-fG-6eFHqofN4=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/image/picture/893310/picture-1524118937.jpg"
            alt="Gallery image 3"
            class="w-100"
          />
        </div>
        <div class="col-3 mt-1">
          <img
            src="https://4.bp.blogspot.com/-G3M4JylBWPs/WeCPcWSG6AI/AAAAAAAALI8/qlI-hooDvoU0LVZZ-LALdu1MA6x6vuJKACLcBGAs/s1600/Lindaleenk-Hanamasa-Review-5.jpeg"
            data-mdb-img="https://4.bp.blogspot.com/-G3M4JylBWPs/WeCPcWSG6AI/AAAAAAAALI8/qlI-hooDvoU0LVZZ-LALdu1MA6x6vuJKACLcBGAs/s1600/Lindaleenk-Hanamasa-Review-5.jpeg"
            alt="Gallery image 4"
            class="w-100"
          />
        </div>
    </div>
</div> --}}
<a class="btn btn-outline-secondary" href="/home"> Kembali</a>
  </div>
  <div class="col-lg-6">

      <div class="card-body">
        <h2 class="card-title">Hanamasa</h2>
        <p class="font-italic">09.00am - 21.00pm | OPEN</p>
        <h4 class="card-title">Location</h4>
        <p class="font-italic">Hanamasa Dago
            Jl. Ir. H. Juanda No.48, Citarum, Bandung Wetan, Kota Bandung, Jawa Barat 40115</p>
        <h4 class="card-title">Brief Description</h4>
        <p class="font-italic">HANAMASA Restoran, merupakan restoran Jepang pertama di Indonesia bertaraf International dengan konsep Self - Service, serta perpaduan tradisionil khas Jepang dan Indonesia</p>
        <h4 class="card-title">Detail Description</h4>
        <p class="font-italic">Open Link : https://www.hanamasaresto.com/</p>
        <dl>
        <h4 class="card-title">Menu Items</h4>
            <dd class="font-italic">Harga Makan Sepuasnya  -  Rp. 214.500,-</dd>
            <dd class="font-italic">Harga Makan dan Minum Sepuasnya  -  Rp. 223.500,-</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
@endsection