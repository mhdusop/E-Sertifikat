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
        <div class="card-body">
            <form class="user" action="{{route('murid.index')}}" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama"
                            placeholder="Masukan Nama" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-user" name="email"
                            id="email" placeholder="Masukan Email"required="required" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="telpon">No Telpon</label>
                        <input type="telpon" class="form-control form-control-user" name="telpon"
                            id="telpon" placeholder="Masukan No Telpon"required="required" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="password"> Password</label>
                        <input type="password" class="form-control form-control-user" name="password"
                            id="password" placeholder="Masukan Password"required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="sebagai">Sebagai</label>
                        <input type="sebagai" class="form-control form-control-user" name="sebagai"
                            id="sebagai" placeholder="Masukan Sebagai"required="required" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="address-editor" class="form-control" cols="30" rows="10" placeholder="Masukan Alamat"></textarea>
                    </div>
                </div>
                <button class="btn btn-info text-white">Tambah Pengguna</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
    
@stop