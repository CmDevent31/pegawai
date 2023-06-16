<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-- Tambahkan link CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        object-fit: cover;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        
      .album-col {
        margin-left: 0px; /* Jarak antar samping */
        }
      }

  .bg-image {
    position: relative;
    overflow: visible;
  }

  .bg-image img {
    transition: transform 0.3s;
  }

  .bg-image:hover img {
    transform: scale(1.05);
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 40px;
    height: 40px;
    background-size: 100% 100%;
    background-repeat: no-repeat;
  }

  .multi-carousel {
    overflow: visible;
    position: relative;
    width: 100%;
  }

  .multi-carousel-inner {
    display: flex;
    transition: transform 0.5s;
  }

  .multi-carousel-item {
    flex: 0 0 100%;
    margin-right: 15px;
  }

  .multi-carousel-item:last-child {
    margin-right: 0;
  }

  .multi-carousel-item img {
    width: 100%;
    object-fit: cover;
  }
</style>
    
</head>
<body>
@extends('layouts.main')
@section('home')

<section class="text-center">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="multi-carousel-item">
                <div class="bg-image hover-zoom rounded-4 overflow-hidden">
                  <img src="https://tse1.mm.bing.net/th?id=OIP.UTU1yQOwh9HsgLbX4rl2ZwHaEK&pid=Api&P=0&h=2000" class="card-img-top">
                  <a href="#exampleModal1" data-bs-toggle="modal" class="stretched-link"></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="multi-carousel-item">
                <div class="bg-image hover-overlay rounded-4 shadow-1-strong overflow-hidden">
                  <img src="https://bolulembang.co.id/wp-content/uploads/2020/09/cafe-instagramable-di-bandung-1536x864.jpg" class="card-img-top" alt="Image">
                  <a href="#exampleModal1" data-bs-toggle="modal" class="stretched-link"></a>
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="multi-carousel-item">
                <div class="bg-image hover-overlay rounded-4 shadow-1-strong overflow-hidden">
                  <img src="https://www.gotravelly.com/assets/img/culinary/gallery/1465/8dead42477c9258f6f7137aed3127ef9.jpg" class="card-img-top">
                  <a href="#exampleModal1" data-bs-toggle="modal" class="stretched-link"></a>
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <div class="col">
              <div class="multi-carousel-item">
                <div class="bg-image hover-zoom rounded-4 overflow-hidden">
                  <img src="https://i2.wp.com/www.koran.id/wp-content/uploads/2019/06/cropped-Caf%C3%A9-di-Bandung-yang-Paling-Hits.jpg?fit=1152%2C648&ssl=1" class="card-img-top" alt="Image">
                  <a href="#exampleModal1" data-bs-toggle="modal" class="stretched-link"></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="multi-carousel-item">
                <div class="bg-image hover-overlay rounded-4 shadow-1-strong overflow-hidden">
                  <img src="https://3.bp.blogspot.com/-Gh8eDq2iifo/WgViTUXjyJI/AAAAAAAAAPg/W-gTsWzjdiEKaCI41YsX-7TUr-jwZaZ4QCLcBGAs/s1600/cafe-di-bandung-6.jpg" class="card-img-top">
                  <a href="#exampleModal1" data-bs-toggle="modal" class="stretched-link"></a>
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="multi-carousel-item">
                <div class="bg-image hover-overlay rounded-4 shadow-1-strong overflow-hidden">
                  <img src="https://tse1.mm.bing.net/th?id=OIP.DeIrnNKzsitrGZ3l3iljgAHaEK&pid=Api&P=0&h=2000" class="card-img-top">
                  <a href="#exampleModal1" data-bs-toggle="modal" class="stretched-link"></a>
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<!-- Section: Modals -->

  
<div class="container mt-5">
<div>
     
        <!-- Tombol untuk membuka modal -->
        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#locationModal">
          Location
      </button>
              <!-- Modal -->
              <div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="locationModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="locationModalLabel">Pilih Lokasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="map" style="height: 400px;"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="saveLocation">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <form id="locationForm" method="POST" action="/location" style="display: none;">
                @csrf
    
                <input type="hidden" id="latitude" name="latitude">
                <input type="hidden" id="longitude" name="longitude">
            </form>
        </div>
    
  <h3>Our Merchants</h3>
  <main>
                                
                                    
                                    <div class="album py-2 ">
                                  
                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3 ">
                                             
                                             
                                                <div class="col album-col" >
                                          <div class="card shadow" style="width: 210px; height: 330px;">
                                            <img src="https://ecs7.tokopedia.net/img/banner/2018/11/16/2892668/2892668_baec79d8-40c8-44f2-9c92-a6bf8349b945.png" class="bd-placeholder-img card-img-top" width="100%" height="180" alt="Your Image">
                                
                                            <div class="card-body">
                                                <dl>
                                                    <dt style="font-size: 17px;">Kintan Buffet</dt>
                                                    <dd style="font-size: 10px;">Mall Senayan City</dd>
                                                    <p class="font-italic" style="font-size: 10px;">Open : 08.00 - 20.00</p>
                                                </dl> 
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/kintan"> view</a>
                                                
                                                
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col album-col">
                                          <div class="card shadow"style="width: 210px; height: 200x;" >
                                            <img src="http://4.bp.blogspot.com/-bDD82RZrVGQ/UATd5AxMTJI/AAAAAAAABFM/pV_UQXzVdbc/s640/gyu-kaku.jpg" class="bd-placeholder-img card-img-top" width="100%" height="180" alt="Your Image">
                                
                                            <div class="card-body">
                                                <dl>
                                                    <dt style="font-size: 17px;">Gyu-Kaku</dt>
                                                    <dd style="font-size: 10px;">AEON Mall,Serpong</dd>
                                                    <p class="font-italic" style="font-size: 10px;">Open : 08.00 - 21.00</p>
                                                </dl> 
                                              <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/gyu"> view</a>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                
                                        <div class="col album-col">
                                          <div class="card shadow" style="width: 210px; height: 100%;">
                                            <img src="https://tse3.mm.bing.net/th?id=OIP.QTYzcPTlJCmLf4DZuyNmxwHaD4&pid=Api&P=0&h=2000" class="bd-placeholder-img card-img-top" width="100%" height="180" >
                                
                                            <div class="card-body">
                                                <dl>
                                                    <dt style="font-size: 17px;">Hanamasa</dt>
                                                    <dd style="font-size: 10px;">Hanamasa Dago</dd>
                                                    <p class="font-italic" style="font-size: 10px;">Open : 09.00 - 21.00</p>
                                                </dl> 
                                              <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/hana"> view</a>
                                                 
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col album-col">
                                          <div class="card shadow" style="width: 210px; height: 330px;">
                                            <img src="https://tse3.mm.bing.net/th?id=OIP.BLuZQSu57kpNTPQ-hLB6jgHaHa&pid=Api&P=0&h=2000" class="bd-placeholder-img card-img-top" width="75%" height="180" alt="Your Image">
                                
                                            <div class="card-body">
                                                <dl>
                                                    <dt style="font-size: 17px;">McDonald</dt>
                                                    <dd style="font-size: 10px;">McDonald's Simpang Dago</dd>
                                                    <p class="font-italic" style="font-size: 10px;">Open : 07.00 - 22.00</p>
                                                </dl> 
                                              <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/mcd"> view</a>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col album-col">
                                          <div class="card shadow" style="width: 210px; height: 330px;" >
                                            <img src="https://tse4.mm.bing.net/th?id=OIP.WdjhC4_pf3cpQeC-XZFOlQHaHa&pid=Api&P=0&h=2000" class="bd-placeholder-img card-img-top" width="100%" height="180" alt="Your Image">
                                
                                            <div class="card-body">
                                                <dl>
                                                    <dt style="font-size: 17px;">Marugame Udon</dt>
                                                    <dd style="font-size: 10px;">AEON Mall,Serpong</dd>
                                                    <p class="font-italic" style="font-size: 10px;">Open : 08.00 - 21.00</p>
                                                </dl> 
                                              <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/udon"> view</a>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                
                                        <div class="col album-col">
                                          <div class="card shadow"style="width: 210px; height: 330px;" >
                                            <img src="https://ecs7.tokopedia.net/img/banner/2018/11/16/2892668/2892668_baec79d8-40c8-44f2-9c92-a6bf8349b945.png" class="bd-placeholder-img card-img-top" width="75%" height="180" alt="Your Image">
                                
                                            <div class="card-body">
                                                <dl>
                                                    <dt style="font-size: 17px;">Kintan Buffet</dt>
                                                    <dd style="font-size: 10px;">Gandaria City Mall,Gandaria</dd>
                                                    <p class="font-italic" style="font-size: 10px;">Open : 08.00 - 20.00</p>
                                                </dl> 
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/kintan"> view</a>
                                                
                                                
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col album-col">
                                          <div class="card shadow" style="width: 210px; height: 330px;">
                                            <img src="http://4.bp.blogspot.com/-bDD82RZrVGQ/UATd5AxMTJI/AAAAAAAABFM/pV_UQXzVdbc/s640/gyu-kaku.jpg" class="bd-placeholder-img card-img-top" width="100%" height="180" alt="Your Image">
                                
                                            <div class="card-body">
                                              <dl>
                                                <dt style="font-size: 17px;">Gyu-Kaku</dt>
                                                <dd style="font-size: 10px;">AEON Mall Sentul City</dd>
                                                <p class="font-italic" style="font-size: 10px;">Open: 08.00 - 21.00</p>
                                              </dl>
                                              
                                              
                                              <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/gyu"> view</a>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                
                                        <div class="col album-col">
                                          <div class="card shadow"style="width: 210px; height: 330px;">
                                            <img src="https://tse3.mm.bing.net/th?id=OIP.QTYzcPTlJCmLf4DZuyNmxwHaD4&pid=Api&P=0&h=2000" class="bd-placeholder-img card-img-top" width="100%" height="180" >
                                
                                            <div class="card-body">
                                                <dl>
                                                    <dt style="font-size: 17px;">Hanamasa</dt>
                                                    <dd style="font-size: 10px;">Hanamasa Dago</dd>
                                                    <p class="font-italic" style="font-size: 10px;">Open : 09.00 - 21.00</p>
                                                </dl> 
                                              <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/hana"> view</a>
                                                 
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col album-col">
                                          <div class="card shadow" style="width: 210px; height: 330px;">
                                            <img src="https://tse3.mm.bing.net/th?id=OIP.BLuZQSu57kpNTPQ-hLB6jgHaHa&pid=Api&P=0&h=2000" class="bd-placeholder-img card-img-top" width="100%" height="180" alt="Your Image">
                                
                                            <div class="card-body">
                                                <dl>
                                                    <dt style="font-size: 17px;">McDonald</dt>
                                                    <dd style="font-size: 10px;">McDonald's Simpang Dago</dd>
                                                    <p class="font-italic" style="font-size: 10px;">Open : 07.00 - 22.00</p>
                                                </dl> 
                                              <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/mcd"> view</a>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col album-col">
                                          <div class="card shadow" style="width: 210px; height: 330px;">
                                            <img src="https://tse4.mm.bing.net/th?id=OIP.WdjhC4_pf3cpQeC-XZFOlQHaHa&pid=Api&P=0&h=2000" class="bd-placeholder-img card-img-top" width="100%" height="180" alt="Your Image">
                                
                                            <div class="card-body">
                                                <dl>
                                                    <dt style="font-size: 17px;">Marugame Udon</dt>
                                                    <dd style="font-size: 10px;">AEON Mall,Serpong</dd>
                                                    <p class="font-italic" style="font-size: 10px;">Open : 08.00 - 21.00</p>
                                                </dl> 
                                              <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-outline-secondary" href="/udon"> view</a>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                
                                </main>
                                <!-- Tambahkan script JavaScript Bootstrap dan Location Picker -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 400px;
        }
    </style>
</head>
    
<body>
  
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: 22.2734719, lng: 70.7512559 };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello Rajkot!",
          });
        }
  
        window.initMap = initMap;
    </script>
  
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
  
                                <footer class="text-muted py-5">
                                  <div class="container">
                                    <p class="float-end mb-1">
                                      <a href="#" class="btn btn-outline-warning">Back to top</a>
                                    </p>
                                 
                                  </div>
                                </footer>
                                
                                
                                    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
                                
                                      
                                  </body>
                                </html>
                                

</div>
</div>
</div>
</div>
</div>
</div>    
</div>
</div>
</div>
@endsection