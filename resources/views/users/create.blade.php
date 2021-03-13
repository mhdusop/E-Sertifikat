@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="m-0 font-weight-bold text-primary">Create User</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('users.index')}}" class="btn btn-secondary btn-sm float-right">
                        <i class="fa fa-chevron-left"></i> Back
                    </a>  
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="user" action="{{route('users.index')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukan Nama" required="required">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email"
                            id="email" placeholder="Masukan Email"required="required" >
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                    <label for="password"> Password</label>
                        <input type="password" class="form-control" name="password"
                            id="password" placeholder="Masukan Password"required="required">
                    </div>
                    <div class="col">
                        <label for="nilai">Nilai</label>
                        <input type="number" class="form-control" id="nilai" name="nilai"
                            placeholder="Masukan Nilai" required="required">
                    </div>
                </div>
                <div class="row pb-3 pt-3"> 
                    <div class="col">
                        <label for="sebagai">Sebagai</label>
                        <select class="form-control" id="sebagai" required="required" name="sebagai"> 
                            <option value="peserta">Peserta</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="telpon">No HP</label>
                        <input type="number" class="form-control" name="telpon"
                            id="telpon" placeholder="Masukan Nomor Hp" required="required" >
                    </div>
                    
                </div>
                <div class="row pb-3 pt-3">
                    <div class="col">
                    <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" cols="10" rows="10" placeholder="Masukan Alamat"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-secondary">
                            <i class="fa fa-times"></i> Reset
                        </button>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-paper-plane"></i> Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
    
@stop