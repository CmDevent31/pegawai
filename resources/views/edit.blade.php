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
                              <button type="button" class="btn btn-success btn-lg ">Edit Data</button></center>
                              <div class="float-end">   
                          </div>
                          <div>
                                <a class="btn btn-primary" href="/pegawai"> Kembali</a>
                                <table class="table table-bordered">
                                    @foreach($pegawai as $p)
                                    <form action="/pegawai/update" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                                        <div class="form-group">
                                          <div class="col-xs-10 col-sm-10 col-md-6">
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                          <div class="col-xs-10 col-sm-10 col-md-6">
                                            <label for="jabatan">Jabatan</label>
                                            <select class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                                                <option value="Front-End">Front-End</option>
                                                <option value="Back-End">Back-End</option>
                                                <option value="Full-Stack">Full-Stack</option>
                                                <option value="Manajer">Manajer</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-xs-10 col-sm-10 col-md-6">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $p->tanggal_lahir }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-xs-10 col-sm-10 col-md-6">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" required="required" name="alamat" placeholder="Alamat">{{ $p->pegawai_alamat }}</textarea>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                            <center>
                                                <button class="btn btn-success" type="submit" value="Simpan Data">Simpan Data</button>
                                            </center>
                                        </div>
                                    </form>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
