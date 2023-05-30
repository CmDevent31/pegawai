<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<body >
    <div class="box box-primary">
        <div class="box-header">
	<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                            <div>
                        </div><center>
                            <button type="button" class="btn btn-success btn-lg ">Edit Data</button></center>
                            <div class="float-end">   
                        </div>
	<a class="btn btn-primary" href="/pegawai"> Kembali</a>
    <div class="float-end">  
       
            <table class="table table-bordered">
</div>
</div>
</div>
	
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> 
    </div>
</div>
<div class="box-body">
    <div class="form-group">
	    Nama<input class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" placeholder="Nama"> 
    </div>
</div>
<div class="box-body">
    <div class="form-group">
		Jabatan<select class="form-control"type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            <option value="Front-End">Front-End</option>
            <option value="Back-End">Back-End</option>
            <option value="Full-Stack">Full-Stack</option>
            <option value="Manajer">Manajer</option> 
        </select>
    </div>
</div>
<div class="box-body">
    <div class="form-group">
		Tanggal Lahir<input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $p->tanggal_lahir }}" class="form-control" required>
    </div>
</div>
<div class="box-body">
    <div class="form-group">
		Alamat<textarea  class="form-control" required="required" name="alamat" placeholder="Alamat">{{ $p->pegawai_alamat }}</textarea> 
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12  mt-3">
		<button class="btn btn-success" type="submit" value="Simpan Data"> Simpan Data </button>
        </div>
</form>
@endforeach
</div>
</div>
</div>
</div>
</div>
</div>
</table>
</div>
</div>
</body>
</html>