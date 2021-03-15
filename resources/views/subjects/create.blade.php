@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="m-0 font-weight-bold text-primary">Create Subject</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('subjects.index')}}" class="btn btn-secondary btn-sm float-right">
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
                        <label for="nama">Student Name</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Insert Your Name" required="required">
                    </div>
                    <div class="col">
                        <label for="nama">Subject Name</label>
                        <input type="text" class="form-control" id="subject" name="subject"
                            placeholder="Insert Your Subject" required="required">
                    </div>
                </div>
        
        <hr>
        <div class="row">
            <div class="col" id="fieldList"></div>
            <div class="col mt-2" >
            </div>
        </div>
        <div class="row mt-2">
            <div class="col text-right">
                <button type="button" class="add btn btn-primary" name="add" id="addMore">
                    <i class="fa fa-plus"></i> Add Field
                </button>
            </div>
        </div>
        <hr>
        <!-- Footer -->
                <div class="row mt-2">
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
            </div>
            </div>
        </form>
    </div>
</div>
@stop


@section('footer_code')
<!-- /.container-fluid -->
<script type="text/javascript">
    $(function() {
    $("#addMore").click(function(e) {
        e.preventDefault();
        $("#fieldList").append("<label for='nama'>Name</label>");
        $("#fieldList").append("<input type='text' class='form-control' id='nama' name='nama' placeholder='Name' required='required'>");
        $("#fieldList").append("<label for='value'>Value</label>");
        $("#fieldList").append("<input type='text' class='form-control' id='value' name='value' placeholder='Value' required='required'>");
        
    });
});


    </script>
@stop