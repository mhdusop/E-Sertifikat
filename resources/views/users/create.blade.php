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
                        <label for="nama">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Insert Your Name" required="required">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email"
                            id="email" placeholder="Insert Your Email"required="required" >
                    </div>
                    <div class="col">
                    <label for="password"> Password</label>
                        <input type="password" class="form-control" name="password"
                            id="password" placeholder="Insert Your Password"required="required">
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <label for="password"> Province</label>
                        <select class="form-control" id="province" required="required" name="province"> 
                            <option selected>Select Province</option>
                            @foreach ($provinces as $key => $value)
                                <option value="{{ $key }}" >{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>    
                    <div class="col">
                        <label for="password"> City</label>
                        <select class="browser-default custom-select form-control" name="city" id="city">

                        </select>
                    </div>
                    <div class="col">
                        <label for="password"> District</label>
                        <select class="form-control" id="district" required="required" name="district"> 
                            
                        </select>
                    </div>
                </div>
                <div class="row pb-3 pt-3"> 
                    <div class="col">
                        <label for="sebagai">Role</label>
                        <select class="form-control" id="sebagai" required="required" name="sebagai"> 
                            <option selected></option>
                            <option value="admin">Admin</option>
                            <option value="fasilitator">Fasilitator</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="telpon">Phone</label>
                        <input type="number" class="form-control" name="telpon"
                            id="telpon" placeholder="Insert Your Number Phone" required="required" >
                    </div>
                    
                </div>
                <div class="row pb-3 pt-3"> 
                    <div class="col">
                        <label for="telpon">PLace Of Birth</label>
                        <input type="text" class="form-control" name="telpon"
                            id="telpon" placeholder="Insert Your PLace Of Birth" required="required" >
                    </div>
                    <div class="col">
                        <label for="telpon">Birth Of Date</label>
                        <input type="date" class="form-control" name="telpon"
                            id="telpon" placeholder="Insert Your Birth Of Date" required="required" >
                    </div>
                    
                </div>
                <div class="row pb-3 pt-3">
                    <div class="col">
                    <label for="alamat">Address</label>
                        <textarea name="alamat" id="alamat" class="form-control" cols="10" rows="10" placeholder="Insert Your Address"></textarea>
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
@stop

@section('footer_code')
<!-- /.container-fluid -->

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        
        $('#province').on('change',function(e) {
            
            var province_uuid = e.target.value;
            $('#city').empty();
            $('#district').empty();

            $.ajax({
                
                url:"/cities?province_uuid="+province_uuid,
                type:"GET",
                
                success:function (data) {

                $('#city').empty();
                $('#city').append('<option value="" selected>-- Pilih Kota / Kabupaten --</option>');
                $.each(data.cites,function(index,city){
                    
                    $('#city').append('<option value="'+city.uuid+'">'+city.name+'</option>');
                })

                }
            })
        });
        $('#city').on('change',function(e) {

            $('#district').empty();
            
            var city_uuid = e.target.value;

            $.ajax({
                
                url:"/districts?city_uuid="+city_uuid,
                type:"GET",
                
                success:function (data) {

                $('#district').empty();
                $('#district').append('<option value="" selected>-- Pilih Kelurahan --</option>');
                $.each(data.districts,function(index,district){
                    
                    $('#district').append('<option value="'+district.uuid+'">'+district.name+'</option>');
                })

                }
            })
        });

    });
</script>

    
@stop