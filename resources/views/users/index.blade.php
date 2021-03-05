@extends('layouts.frontend_layout')
@section('content')
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
        <a href="{{route('murid.create')}}" class="btn btn-primary btn-sm float-right">
        <i class="fas fa-user-plus"></i>
            Tambah Pengguna
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Code Unik</th>
                        <th>Sebagai</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $users)

                    <tr>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->sebagai}}</td>
                        <td>{{$users->telpon}}</td>
                        <td>{!! $users->alamat !!}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@stop