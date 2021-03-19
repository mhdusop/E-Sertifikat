@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h3 class="m-0 font-weight-bold text-primary">Edit Subject</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('subjects.index')}}" class="btn btn-secondary btn-sm float-right">
                    <i class="fa fachevron-left"></i> Back
                </a>  
            </div>
        </div>
    </div>
    <div class="card-body table-responsive">
    <form class="user" action="{{ route('subjects.update', ['subject' => $subjects->uuid]) }}" method="POST">
    @csrf
    {{method_field('PATCH')}}
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <label for=""><strong>Student</strong></label>
                    </div>
                    <div class="col">
                        <select class="form-control" id="name" required="required" name="student"> 
                            <option selected>Select Name</option>
                            @foreach ($users as $key => $user)
                                <option value="{{ $user->uuid }}" {{ $user->uuid === $subjects->user_uuid? 'selected' : ''}}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>    
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for=""><strong>Subject</strong></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="subject" name="subject"
                        placeholder="Insert Your Name" required="required" value="{{$subjects->name}}">
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <h5 class="mt-2 mb-3"><strong>Studies List</strong></h5>
                <div class="table-responsive">
                    <table class="table table-hovered">
                        <thead>
                            <tr>
                                <th>Studies Name</th>
                                <th>Value</th>
                                <th>Alphabet</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($subjects->subjectValue as $value)
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Insert Your Name" required="required" value="{{$value->name}}">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="value" name="value"
                                    placeholder="Insert Your Name" required="required" value="{{$value->value}}">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
                </div>
                <tfoot>
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
                </tfoot>
            </div>
            
        </div>
    </div>
    </form>
</div>

</div>
<!-- /.container-fluid -->
    
@stop