@extends('layouts.main')

@section('resto')


<div class="row">
  <div class="col-lg-6">
    
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://tse4.mm.bing.net/th?id=OIP.wcRCBWRSiN2ZU0ZQzqzcyAHaEQ&pid=Api&P=0&h=2000" alt="Gallery image 1" class="ecommerce-gallery-main-img active w-100" data-mdb-toggle="lightbox" />
        </div>
        <div class="carousel-item">
          <img src="https://tse3.mm.bing.net/th?id=OIP.m9Y7okhz6VrIuCzWyuvlDwHaE7&pid=Api&P=0&h=2000" alt="Gallery image 3" class="w-100" />
        </div>
        <div class="carousel-item">
          <img src="https://tse4.mm.bing.net/th?id=OIP.DtVkX0VrpAr3_-YKTtgJogHaEo&pid=Api&P=0&h=2000" alt="Gallery image 2" class="w-100" />
        </div>
        <div class="carousel-item">
          <img src="https://tse1.mm.bing.net/th?id=OIP.W2bJfRa8z41l_hIAyF6lQwHaD4&pid=Api&P=0&h=2000" alt="Gallery image 4" class="w-100" />
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
          <img src="https://tse4.mm.bing.net/th?id=OIP.wcRCBWRSiN2ZU0ZQzqzcyAHaEQ&pid=Api&P=0&h=2000" data-mdb-img="https://tse4.mm.bing.net/th?id=OIP.wcRCBWRSiN2ZU0ZQzqzcyAHaEQ&pid=Api&P=0&h=2000" alt="Gallery image 1" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://tse3.mm.bing.net/th?id=OIP.m9Y7okhz6VrIuCzWyuvlDwHaE7&pid=Api&P=0&h=2000" data-mdb-img="https://tse3.mm.bing.net/th?id=OIP.m9Y7okhz6VrIuCzWyuvlDwHaE7&pid=Api&P=0&h=2000" alt="Gallery image 2" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://tse4.mm.bing.net/th?id=OIP.DtVkX0VrpAr3_-YKTtgJogHaEo&pid=Api&P=0&h=2000" alt="Gallery image 3" class="w-100" />
        </div>
        <div class="col-3 mt-1">
          <img src="https://tse1.mm.bing.net/th?id=OIP.W2bJfRa8z41l_hIAyF6lQwHaD4&pid=Api&P=0&h=2000" 
          data-mdb-img="https://tse1.mm.bing.net/th?id=OIP.W2bJfRa8z41l_hIAyF6lQwHaD4&pid=Api&P=0&h=2000" alt="Gallery image 4" class="w-100" />
        </div>
      </div>
    </div>
    
    
    
    {{-- <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
      <div class="row py-3 shadow-5">
        <div class="col-12 mb-1">
          <div class="lightbox">
            <img
              src="https://tse4.mm.bing.net/th?id=OIP.wcRCBWRSiN2ZU0ZQzqzcyAHaEQ&pid=Api&P=0&h=2000"
              alt="Gallery image 1"
              class="ecommerce-gallery-main-img active w-100"
            />
          </div>
        </div>
        <div class="col-3 mt-1">
          <img
            src="https://tse4.mm.bing.net/th?id=OIP.wcRCBWRSiN2ZU0ZQzqzcyAHaEQ&pid=Api&P=0&h=2000"
            data-mdb-img="https://tse4.mm.bing.net/th?id=OIP.wcRCBWRSiN2ZU0ZQzqzcyAHaEQ&pid=Api&P=0&h=2000"
            alt="Gallery image 1"
            class="w-100"
          />
        </div>
        <div class="col-3 mt-1">
          <img
            src="https://tse3.mm.bing.net/th?id=OIP.m9Y7okhz6VrIuCzWyuvlDwHaE7&pid=Api&P=0&h=2000"
            data-mdb-img="https://tse3.mm.bing.net/th?id=OIP.m9Y7okhz6VrIuCzWyuvlDwHaE7&pid=Api&P=0&h=2000"
            alt="Gallery image 2"
            class="w-100"
          />
        </div>
        <div class="col-3 mt-1">
          <img
            src="https://tse4.mm.bing.net/th?id=OIP.DtVkX0VrpAr3_-YKTtgJogHaEo&pid=Api&P=0&h=2000"
            data-mdb-img="https://tse4.mm.bing.net/th?id=OIP.DtVkX0VrpAr3_-YKTtgJogHaEo&pid=Api&P=0&h=2000"
            alt="Gallery image 3"
            class="w-100"
          />
        </div>
        <div class="col-3 mt-1">
          <img
            src="https://tse1.mm.bing.net/th?id=OIP.W2bJfRa8z41l_hIAyF6lQwHaD4&pid=Api&P=0&h=2000"
            data-mdb-img="https://tse1.mm.bing.net/th?id=OIP.W2bJfRa8z41l_hIAyF6lQwHaD4&pid=Api&P=0&h=2000"
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
        <h2 class="card-title">McDonald's</h2>
        <p class="font-italic">07.00am - 22.00pm | OPEN</p>
        <h4 class="card-title">Location</h4>
        <p class="font-italic">McDonald's Simpang Dago
            Jl. Ir. H. Juanda no 181,Simpang Dago
                </p>
        <h4 class="card-title">Brief Description</h4>
        <p class="font-italic">McDonald’s merupakan restoran fast food terbesar di dunia yang diawali pada tahun 1955 di California, Amerika Serikat. </p>
        <h4 class="card-title">Detail Description</h4>
        <p class="font-italic">Open Link : https://mcdonalds.co.id/</p>
        <dl>
        <h4 class="card-title">Menu Items</h4>
            <dd class="font-italic">BIG Mac  -  IDR.40.000++</dd>
            <dd class="font-italic">Double CheeseBurger  -  IDR.39.000++</dd>
            <dd class="font-italic">McDouble  -  IDR.35.000++</dd>
            <dd class="font-italic">McChicken  -  IDR.35.000++</dd>
            <dd class="font-italic">McSpicy  -  IDR.42.000++</dd>
        </dl> 
        <h4 class="card-title">Detail Regarding Delivery</h4>
        <p class="font-italic">Min. Order of IDR.50.000</p>
      </div>
    </div>
  </div>
</div>
@endsection