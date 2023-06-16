@extends('layouts.main')

@section('login')
<div class="box box-primary">
    <div class="box-header">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="row">
              <div class="card border-0 shadow rounded">
                <div class="card-body">
                  <div>
                         </div><center>
                             <button type="button" class="btn btn-success btn-lg ">Login</button></center>
                             <div class="float-end">   
                         </div>
                    <form>
                        @csrf
                        <div>
                            <a class="btn btn-primary" href="/pegawai"> Kembali</a>
                            <div class="container mt-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" id="email" type="email" name="email" required value="{{ old('email') }}" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" id="password" type="password" name="password" required>
                                </div>
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
