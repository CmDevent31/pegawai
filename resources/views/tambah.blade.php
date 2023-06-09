@extends('layouts.main')
@section('container')
    
<div class="box box-primary">
    <div class="box-header">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="row">
                    <div class="card border-0 shadow rounded">
                    <div class="card-body">
                </div><center>
                    <button type="button" class="btn btn-success btn-lg ">Buat Data Baru</button></center>
                    <div class="float-end">   
                </div>
                <div>
           
	<a class="btn btn-primary" href="/pegawai"> Kembali</a>
    <div class="container mt-3">
</div>

<table class="table table-bordered">

	<form action="/pegawai/store" method="post">
        @csrf
        <div class="box-body">
            <div class="col-xs-10 col-sm-10 col-md-6">
                <div class="form-group">
		Nama<input class="form-control" type="text" name="nama" required="required" > 
        @error('name')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
</div>
</div>

<div class="box-body">
    <div class="col-xs-10 col-sm-10 col-md-6">
        <div class="form-group">
            Jabatan<select class="form-select" type="text" name="jabatan" required="required" aria-label="Default select example"> 
                <option value="Front-End">Front-End</option>
            <option value="Back-End">Back-End</option>
            <option value="Full-Stack">Full-Stack</option>
            <option value="Manajer">Manajer</option>
            </select>
</div>
</div>

    
<div class="box-body">
    <div class="col-xs-10 col-sm-10 col-md-6">
        <div class="form-group">
             Tanggal Lahir <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
            @error('umur')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror  
            @if (isset($umur))
            <h2>Umur:</h2>
            <p>{{ $umur }}</p>
        @endif
           
        </div>
    </div> 
    
<div class="box-body">
    <div class="col-xs-10 col-sm-10 col-md-6">
        <div class="form-group">
            Alamat<textarea class="form-control" name="alamat" required="required" ></textarea> 
        @error('alamat')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
    <button type="submit" class="btn btn-success" value="Simpan Data"> Simpan Data  </button>
		
</form>
           
</div>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</ul>

</div>
    @endsection