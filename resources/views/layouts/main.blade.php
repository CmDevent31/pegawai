<!DOCTYPE html>
<html>
<head>
                  
    
{{-- memasukan navbar --}}
@include('layouts.header')
</head>

    <body>
{{-- memasukkan konten --}}

    <div class="container mt-4">
        @yield('container')
        @yield('tables')
        @yield('home')
        @yield('resto')
        @yield('login')
	</div>

</body>

{{-- memasukan footer --}}
@include('layouts.footer')


</html>

