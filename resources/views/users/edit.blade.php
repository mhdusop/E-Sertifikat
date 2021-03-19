@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <div class="row">
                <div class="col-md-6">
                    <h3 class="m-0 font-weight-bold text-primary">Edit User</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('users.index')}}" class="btn btn-secondary btn-sm float-right">
                        <i class="fa fa-chevron-left"></i> Back
                    </a>  
                </div>
            </div>
    </div>
    <div class="card-body">
        <form class="user" action="{{ route('users.update', ['user' => $users->uuid]) }}" method="POST">
            @csrf
            {{method_field('PATCH')}}
            <div class="row">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}"
                            placeholder="Insert Your Name" required="required">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email"
                            id="email" placeholder="Insert Your Email" required="required" value="{{$users->email}}">
                    </div>
                    <div class="col">
                    <label for="password"> Password</label>
                        <input type="password" class="form-control" name="password"
                            id="password" placeholder="Insert Your Password">
                    </div>
                </div>
                <div class="row pb-3 pt-3"> 
                    <div class="col">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" required="required" name="role"> 
                            <option selected>{{$users->role}}</option>
                            <option value="admin">Admin</option>
                            <option value="fasilitator">Fasilitator</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" name="phone"
                            id="phone" placeholder="Insert Your Number Phone" required="required" value="{{$users->phone}}">
                    </div>
                    
                </div>
                <div class="row pb-3 pt-3"> 
                    <div class="col">
                        <label for="pob">PLace Of Birth</label>
                        <input type="text" class="form-control" name="pob"
                            id="pob" placeholder="Insert Your PLace Of Birth" required="required" value="{{$users->pob}}">
                    </div>
                    <div class="col">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" name="dob"
                            id="dob" placeholder="Insert Your Birth Of Date" required="required" value="{{date_format(date_create($users->dob), 'Y-m-d')}}">
                    </div>
                    
                </div>
                <div class="row pb-3 pt-3">
                    <div class="col">
                    <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" cols="10" rows="10" placeholder="Insert Your Address">{{$users->address}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-secondary">
                            <i class="fa fa-times"></i> Reset
                        </button>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-primary">
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