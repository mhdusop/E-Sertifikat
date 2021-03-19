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
		<form class="subjects" action="{{route('subjects.index')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="password">Student Name</label>
                        <select class="form-control" id="name" required="required" name="student">
                            <option selected>Select Name</option>
                            @foreach ($users as $key => $user)
                            	<option value="{{ $user->uuid }}" >{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="subject">Subject Name</label>
                        <input type="text" class="form-control" id="subject" name="subject"
                            placeholder="Insert Your Subject" required="required">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col" id="fieldList">
						<div class='row'>
								<div class='col-md-5'>
									<label class='mt-2' for='name'>Studies Name</label>
									<input type='text' class='form-control' id='name' name='name[]' placeholder='Name' required='required'>
								</div>
								<div class='col-md-5'>
									<label class='mt-2' for='value'>Value</label>
									<input type='number' class='form-control' id='value' name='value[]' placeholder='Value' required='required'>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-primary" name="add" id="addMore" style="margin-top: 38px;">
										<i class="fa fa-plus"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
                </div>
				
                <div class="row mt-2">
                    <div class="col text-right">
                        
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
			</form>
        </div>
    </div>
</div>
@stop


@section('footer_code')
<!-- /.container-fluid -->
<script type="text/javascript">
    $(function() {
        var x = 1;
        // var max_fields = 20;
        $("#addMore").click(function(e) {
            e.preventDefault();
            $("#fieldList").append("<div class='row' id='field-child'><div class='col-md-5'><label class='mt-2' for='name'>Studies Name</label><input type='text' class='form-control' id='name' name='name[]' placeholder='Name' required='required'></div><div class='col-md-5'><label class='mt-2' for='value'>Value</label><input type='number' class='form-control' id='value' name='value[]' placeholder='Value' required='required'></div><button type='button' style='margin-top: 38px !important; margin-left: 15px;' class='mt-5 btn btn-danger remove_field'><i class='fa fa-times'></button></div>");
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove field
            e.preventDefault();
			console.log($(this).parent())
            $(this).parent('div').remove(); x--;
        })
    });



    </script>
@stop