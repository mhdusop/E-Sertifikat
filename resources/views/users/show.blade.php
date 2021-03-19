@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h3 class="m-0 font-weight-bold text-primary">User Detail</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('users.index')}}" class="btn btn-secondary btn-sm float-right">
                    <i class="fa fa-chevron-left"></i> Back
                </a>  
            </div>
        </div>
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
                            <th>Role</th>
                            <td> : {{ $users->role }}</td>
                        </tr>
                        <tr>
                            <th>Nilai</th>
                            <td> : {{ $users->nilai }}</td>
                        </tr>
                        <tr>
                            <th>Number Phone</th>
                            <td> : {{ $users->phone }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td> : {{ $users->address }}</td>
                        </tr>
                        <tr>
                            <th>Place Of Birth</th>
                            <td> : {{ $users->pob }}</td>
                        </tr>
                        <tr>
                            <th>Date Of Birth</th>
                            <td> : {{ $users->dob }}</td>
                        </tr>
                        <tr>
                            <th>Akun Dibuat</th>
                            <td> : {{ $users->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3 class="mt-2 mb-3 text-primary"><strong>Subject List</strong></h3>
                <div class="row">
                @if (count($users->subjects) > 0)
                    @foreach ($users->subjects as $subject)
                        <div class="col-md-12 border mb-4">
                            <div class="mt-3 mb-3">
                                <strong>{{$subject->name}}</strong>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hovered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Studies Name</th>
                                            <th>Value</th>
                                            <th>Alphabet</th>
                                        </tr>
                                    </thead>
                                    @if (count($subject->subjectValue) > 0)
                                    <tbody>
                                        @foreach ($subject->subjectValue as $subjectValue)
                                        <tr>
                                            <td>{{$subjectValue->name}}</td>
                                            <td>{{$subjectValue->value}}</td>
                                            <td>{{$subjectValue->alphabet}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    @else
                                    <tbody>
                                        <tr>
                                            <td colspan="3" class="text-center">Tidak ada untuk saat ini</td>
                                        </tr>
                                    </tbody>
                                    @endif
                                </table>
                            </div>
                        </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop