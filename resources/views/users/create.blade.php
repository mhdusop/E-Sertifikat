@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Pengguna</h6>
            <a href="{{route('murid.index')}}" class="btn btn-primary float-right">Kembali</a>
        </div>
        </div>
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Tambah Murid
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form class="user" action="{{route('murid.index')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control form-control-user" id="nama" name="nama"
                                    placeholder="Masukan Nama" required="required">
                            </div>
                            <div class="col">
                                <label for="email">Email</label>
                                <input type="email" class="form-control form-control-user" name="email"
                                    id="email" placeholder="Masukan Email"required="required" >
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                            <label for="password"> Password</label>
                                <input type="password" class="form-control form-control-user" name="password"
                                    id="password" placeholder="Masukan Password"required="required">
                            </div>
                            <div class="col">
                                <label for="sebagai">Sebagai</label>
                                <select class="form-control" id="sebagai" required="required" name="sebagai"> 
                                    <option value="peserta">Peserta</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pb-3 pt-3"> 
                            <div class="col">
                                <label for="telpon">No HP</label>
                                <input type="number" class="form-control form-control-user" name="telpon"
                                    id="telpon" placeholder="Masukan Nomor Hp"required="required" >
                            </div>
                            <div class="col">
                            <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" cols="10" rows="10" placeholder="Masukan Alamat"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-info text-white">Tambah Pengguna</button>
                    </form>
                </div>
            </div>
    </div>
</div>
<!-- /.container-fluid -->
    
@stop