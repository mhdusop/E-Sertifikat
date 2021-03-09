@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile Pengguna</h6>
        <a href="{{route('murid.index')}}" class="btn btn-primary float-right">Kembali</a>
    </div>
    <div class="card-body table-responsive">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td> : {{ $users->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td> : {{ $users->email }}</td>
                        </tr>
                        <tr>
                            <th>Sebagai</th>
                            <td> : {{ $users->sebagai }}</td>
                        </tr>
                        <tr>
                            <th>No Telpon</th>
                            <td> : {{ $users->telpon }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td> : {{ $users->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Akun Dibuat</th>
                            <td> : {{ $users->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop