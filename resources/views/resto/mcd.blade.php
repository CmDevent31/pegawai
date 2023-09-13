@extends('layouts.main')

@section('resto')

<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    line-height: 1.5;
}
.card-wrapper{
    max-width: 1100px;
    margin: 0 auto;
}
img{
    width: 100%;
    display: block;
}
.img-display{
    overflow: hidden;
}
.img-showcase{
    display: flex;
    width: 100%;
    transition: all 0.5s ease;
}
.img-showcase img{
    min-width: 100%;
}
.img-select{
    display: flex;
}
.img-item{
    margin: 0.3rem;
}
.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3){
    margin-right: 0;
}
.img-item:hover{
    opacity: 0.8;
}
.product-content{
    padding: 2rem 1rem;
}
.product-title{
    font-size: 3rem;
    text-transform: capitalize;
    font-weight: 700;
    position: relative;
    color: #12263a;
    margin: 1rem 0;
}
.product-title::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 4px;
    width: 80px;
    background: #12263a;
}
.product-link{
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 0.9rem;
    display: inline-block;
    margin-bottom: 0.5rem;
    background: #256eff;
    color: #fff;
    padding: 0 0.3rem;
    transition: all 0.5s ease;
}
.product-link:hover{
    opacity: 0.9;
}
.product-rating{
    color: #ffc107;
}
.product-rating span{
    font-weight: 600;
    color: #252525;
}
.product-price{
    margin: 1rem 0;
    font-size: 1rem;
    font-weight: 700;
}
.product-price span{
    font-weight: 400;
}
.last-price span{
    color: #f64749;
    text-decoration: line-through;
}
.new-price span{
    color: #256eff;
}
.product-detail h2{
    text-transform: capitalize;
    color: #12263a;
    padding-bottom: 0.6rem;
}
.product-detail p{
    font-size: 0.9rem;
    padding: 0.3rem;
    opacity: 0.8;
}
.product-detail ul{
    margin: 1rem 0;
    font-size: 0.9rem;
}
.product-detail ul li{
    margin: 0;
    list-style: none;
    background: url(shoes_images/checked.png) left center no-repeat;
    background-size: 18px;
    padding-left: 1.7rem;
    margin: 0.4rem 0;
    font-weight: 600;
    opacity: 0.9;
}
.product-detail ul li span{
    font-weight: 400;
}
.purchase-info{
    margin: 1.5rem 0;
}
.purchase-info input,
.purchase-info .btn{
    border: 1.5px solid #ddd;
    border-radius: 25px;
    text-align: center;
    padding: 0.45rem 0.8rem;
    outline: 0;
    margin-right: 0.2rem;
    margin-bottom: 1rem;
}
.purchase-info input{
    width: 60px;
}
.purchase-info .btn{
    cursor: pointer;
    color: #fff;
}
.purchase-info .btn:first-of-type{
    background: #256eff;
}
.purchase-info .btn:last-of-type{
    background: #f64749;
}
.purchase-info .btn:hover{
    opacity: 0.9;
}
.social-links{
    display: flex;
    align-items: center;
}
.social-links a{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: #000;
    border: 1px solid #000;
    margin: 0 0.2rem;
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.5s ease;
}
.social-links a:hover{
    background: #000;
    border-color: transparent;
    color: #fff;
}

@media screen and (min-width: 992px){
    .card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1.5rem;
    }
    .card-wrapper{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-imgs{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .product-content{
        padding-top: 0;
    }
    .btn-group-sm>.btn, .btn-sm{
      padding: 0.25rem 12.5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: 1.2rem;
    }
  }
</style>
<div class="row">
  
<div class="card border-warning">

    <!-- card left -->
    <div class="product-imgs">
      <div class="img-display">
        <div class="img-showcase">
          <img src="https://cdn.murianews.com/wp-content/uploads/2022/09/06200743/mcd-e.jpg" alt="Gallery image 1" class="ecommerce-gallery-main-img active w-100" data-mdb-toggle="lightbox" />
          <img src="https://images.tokopedia.net/img/KRMmCm/2022/8/30/e5519680-cb4c-4dbe-b8a1-8811f7217668.jpg" alt="Gallery image 2" class="w-100" />
          <img src="https://ik.imagekit.io/tvlk/blog/2022/09/zTOnr0bQ-shutterstock_1915291267.jpg?tr=dpr-2,w-675" alt="Gallery image 3" class="w-100" />
          <img src="https://berita.99.co/wp-content/uploads/2023/04/menu-mcd.jpg" alt="Gallery image 4" class="w-100" />
        </div>
      </div>
      <div class="img-select">
        <div class="img-item">
          <a href="#" data-id="1">
            <img src="https://cdn.murianews.com/wp-content/uploads/2022/09/06200743/mcd-e.jpg" alt="Gallery image 1" class="w-100" />
          </a>
        </div>
        <div class="img-item">
          <a href="#" data-id="2">
            <img src="https://images.tokopedia.net/img/KRMmCm/2022/8/30/e5519680-cb4c-4dbe-b8a1-8811f7217668.jpg" alt="Gallery image 2" class="w-100" />
          </a>
        </div>
        <div class="img-item">
          <a href="#" data-id="3">
            <img src="https://ik.imagekit.io/tvlk/blog/2022/09/zTOnr0bQ-shutterstock_1915291267.jpg?tr=dpr-2,w-675" alt="Gallery image 3" class="w-100" />
          </a>
        </div>
        <div class="img-item">
          <a href="#" data-id="4">
            <img src="https://berita.99.co/wp-content/uploads/2023/04/menu-mcd.jpg" alt="Gallery image 4" class="w-100" />
          </a>
        </div>
      </div>
    </div>
    <!-- card right -->
    <div class="product-content">
      <h2 class="product-title">McDonald's</h2>
     
      
      
      <div class="product-detail">
        <h2>About This Item:</h2>
        <p class="font-italic">McDonald’s merupakan restoran fast food terbesar di dunia yang diawali pada tahun 1955 di California, Amerika Serikat. </p>
        <ul>
          <li>Location: <span>McDonald's Simpang Dago
            Jl. Ir. H. Juanda no 181,Simpang Dago</span></li>
          <li>Detail Regarding Delivery: <span>Min. Order of $50</span></li>
          <li>Menu Items:</li>
          <ul>
            <li>BIG Mac  -  IDR.40.000++</li>
            <li>Double CheeseBurger  -  IDR.39.000++</li>
            <li>McDouble  -  IDR.35.000++</li>
            <li>McChicken  -  IDR.35.000++</li>
            <li>McSpicy  -  IDR.42.000++</li>
          </ul>
          <p class="font-italic">Open Link: <a href="https://mcdonalds.co.id/">https://mcdonalds.co.id/</a></p>
          <a href="/home" class="btn btn-sm btn-outline-warning">Kembali</a>
        </ul>
      </div>
    </div>
  </div>
</div>

<script>
  const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);
</script>
@endsection
