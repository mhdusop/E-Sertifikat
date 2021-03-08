@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Pengguna</h6>
        <a href="{{route('murid.index')}}" class="btn btn-primary float-right">Kembali</a>
    </div>
    <div class="card-body">
        <form class="user" action="{{ route('murid.update', ['murid' => $users->id]) }}" method="POST">
            @csrf
            {{ $errors }}
            {{method_field('PATCH')}}
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control form-control-user" value="{{ $users->name }}" id="nama" name="nama"
                        placeholder="Edit Nama" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-user" name="email" value="{{ $users->email }}"
                        id="email" placeholder="Edit Email"required="required" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="telpon">No Telepon</label>
                    <input type="number" class="form-control form-control-user" name="telpon" 
                        id="telpon" placeholder="Edit No Telepon"required="required" value="{{$users->telpon}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="sebagai">Sebagai</label>
                        <select class="form-control" id="role" required="required" name="role"> 
                            <option value="sebagai" {{$users->sebagai}}>Peserta</option>
                        </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="password">Password</label>
                    <input type="password" class="form-control form-control-user" name="password" 
                        id="password" placeholder="Edit Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="alamat">Masukan Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" cols="10" rows="10" placeholder="Edit Alamat">{{$users->alamat}}</textarea>
                </div>
            </div>
            <button class="btn btn-info text-white">Perbarui</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop