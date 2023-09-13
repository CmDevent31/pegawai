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

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Navbar Dropdown Login and Signup Form with Social Buttons</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    font-family: 'Varela Round', sans-serif;
}
.form-control {
    box-shadow: none;		
    font-weight: normal;
    font-size: 13px;
}
.navbar {
    background: #ffffff;
    padding-left: 25px;
    padding-right: 10px;
    border-bottom: 1px solid #ffffff;
    border-radius: 0;
}
.nav-link img {
    border-radius: 50%;
    width: 36px;
    height: 36px;
    margin: -8px 0;
    float: left;
    margin-right: 10px;
}
.navbar .navbar-brand {
    padding-left: 0;
    font-size: 20px;
    padding-right: 4px;
}
.navbar .navbar-brand b {
    color: #33cabb;		
}
.navbar .form-inline {
    display: inline-block;
}
.navbar a {
    color: #888888;
    font-size: 15px;
}
.search-box {
    position: relative;
    
}	
.search-box input {
    padding-right: 35px;
    border-color: #dfe3e8;
    border-radius: 4px !important;
    box-shadow: none
}
.search-box .input-group-text {
    min-width: 35px;
    border: none;
    background: transparent;
    position: absolute;
    right: 0;
    z-index: 9;
    padding: 7px;
    height: 100%;
}
.search-box i {
    color: #a0a5b1;
    font-size: 20px;
}
.navbar .sign-up-btn {
    min-width: 110px;
    max-height: 36px;
}
.navbar .dropdown-menu {
    color: #999;
    font-weight: normal;
    border-radius: 1px;
    border-color: #e5e5e5;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar a, .navbar a:active {
    color: #888888;
    padding: 8px 20px;
    background: transparent;
    line-height: normal;
}
.navbar .navbar-form {
    border: none;
}
.navbar .action-form {
    width: 280px;
    padding: 20px;
    left: auto;
    right: 0;
    font-size: 14px;
}
.navbar .action-form a {		
    color: #33cabb;
    padding: 0 !important;
    font-size: 14px;
}
.navbar .action-form .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}
.navbar .btn-primary, .navbar .btn-primary:active {
    color: #fff;
    background: #ffa811 !important;
    border: none;
}	
.navbar .btn-primary:hover, .navbar .btn-primary:focus {		
    color: #fff;
    background: #bf8431 !important;
}
.navbar .social-btn .btn, .navbar .social-btn .btn:hover {
    color: #fff;
    margin: 0;
    padding: 0 !important;
    font-size: 13px;
    border: none;
    transition: all 0.4s;
    text-align: center;
    line-height: 34px;
    width: 47%;
    text-decoration: none;
}
.navbar .social-btn .facebook-btn {
    background: #507cc0;
}
.navbar .social-btn .facebook-btn:hover {
    background: #4676bd;
}
.navbar .social-btn .twitter-btn {
    background: #64ccf1;
}
.navbar .social-btn .twitter-btn:hover {
    background: #4ec7ef;
}
.navbar .social-btn .btn i {
    margin-right: 5px;
    font-size: 16px;
    position: relative;
    top: 2px;
}
.or-seperator {
    margin-top: 32px;
    text-align: center;
    border-top: 1px solid #e0e0e0;
}
.or-seperator b {
    color: #666666;
    padding: 0 8px;
    width: 30px;
    height: 30px;
    font-size: 13px;
    text-align: center;
    line-height: 26px;
    background: #fff;
    display: inline-block;
    border: 1px solid #e0e0e0;
    border-radius: 50%;
    position: relative;
    top: -15px;
    z-index: 1;
}
.navbar .action-buttons .dropdown-toggle::after {
    display: none;
}
.form-check-label input {
    position: relative;
    top: 1px;
}
@media (min-width: 1200px){
    .form-inline .input-group {
        width: 300px;
        margin-left: 30px;
    }
}
@media (max-width: 768px){
    .navbar .dropdown-menu.action-form {
        width: 100%;
        padding: 10px 15px;
        background: transparent;
        border: none;
    }
    .navbar .form-inline {
        display: block;
    }
    .navbar .input-group {
        width: 100%;
    }
 
@import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

body {
    font-family: 'Rubik', sans-serif;
    height: 100% !important;
    background-color: #F8F9FB !important;
}

.container-fluid{
    margin-top: 101px;
    color:#000 !important;
}

.card{
    background-color: #F8F9FB !important;
}

p{
    font-size: calc(12px + (14 - 12) * ((100vw - 360px) / (1600 - 360))) !important; 
    display: fkex;
}

h3{
    font-size: calc(24px + (30 - 24) * ((100vw - 360px) / (1600 - 360))) !important; 
}

.social{
    font-size: 21px !important; 
}


.color-text{
    color:#757575 !important;
}


button {
    font-size: calc(12px + (13 - 12) * ((100vw - 360px) / (1600 - 320))) !important;
    background-color: #ffa91e !important;
    padding-left:  calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important; 
    padding-right: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important; 
    padding-top:  calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important; 
    padding-bottom:   calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important; 
 }

 button:focus {
     -moz-box-shadow: none !important;
     -webkit-box-shadow: none !important;
     box-shadow: none !important;
     outline-width: 0
 }

 footer{
    color:#caced1 !important;
 }

 li{
     margin-top: 20px ;
     margin-bottom: 20px ;
 }
 
.Careers{ 
    cursor: pointer;
    color: #1E88E5;
}

.row-1{
    background-color:#1E242A !important;
}

.row-2{
    
    background-color: #28323C !important;
}
}

</style>
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
e.stopPropagation();
});
</script>
<nav class="navbar navbar-expand-lg <strong> navbar-light border-bottom bg-light</strong>">
<a href="/home" class="navbar-brand">
<img src="https://clipground.com/images/wattpad-logo-1.png" width="30" height="30" alt="Malas Ngoding"></a>  		
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
<span class="navbar-toggler-icon"></span>
</button>
<!-- Collection of nav links, forms, and other content for toggling -->
<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
<div class="navbar-nav ml-auto">

<form class="navbar-form form-inline">

<div class="input-group search-box">								
<input type="text" id="search" class="form-control" placeholder="Search here...">

<span class="input-group-text">
    <i class="material-icons">&#xE8B6;</i>
</span>
</div>
</div>
</form>

{{-- icon bootstrap --}}
<div class="navbar-nav ml-auto action-buttons">
<a href="#" class="nav-item nav-link text-warning"> <i class="bi bi-basket2-fill"></i></a>

{{-- button --}}
<div class="nav-item">
<a href="/pegawai"  class="nav-link  mr-4">data</a>

</div>
<div class="nav-item">
<a href="/login"  class="nav-link  mr-4">Login</a>

</div>
<div class="nav-item">
<a href="/register" class="btn btn-primary  sign-up-btn">Sign up</a>

</div>
</div>
</div>
</nav>