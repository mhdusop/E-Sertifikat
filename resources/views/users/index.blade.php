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
        <a href="{{route('murid.print')}}" class="btn btn-danger btn-sm float-right mr-1">
        <i class="fas fa-print"></i>
            Cetak PDF
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Sebagai</th>
                        <th>Nilai</th>
                        <th>No Telp</th>
                        <th>Kode Unik</th>
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
                        <td>{{ $users->nilai }}</td>
                        <td>{{$users->telpon}}</td>
                        <td>{{$users->kode_unik}}</td>
                        <td>{!! $users->alamat !!}</td>
                        <!-- <td>{{$users->kode_unik}}</td> -->
                        <td>
                            <form action="{{ route('murid.destroy', $users->id) }}" method="POST">       
                            @csrf
                            @method('DELETE')
                                <a href="{{ route('murid.show', $users->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('murid.edit', $users->id) }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <button data-toggle="modal" onclick="return confirm('Are you sure?');"type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
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