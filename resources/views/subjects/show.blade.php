@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h3 class="m-0 font-weight-bold text-primary">Detail Subject</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('subjects.index')}}" class="btn btn-secondary btn-sm float-right">
                    <i class="fa fachevron-left"></i> Back
                </a>  
            </div>
        </div>
    </div>
    <div class="card-body table-responsive">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <label for=""><strong>Student</strong></label>
                    </div>
                    <div class="col-md-9">
                        {{$subject->user->name}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for=""><strong>Subject</strong></label>
                    </div>
                    <div class="col-md-9">
                        {{$subject->name}}
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <h5 class="mt-2 mb-3"><strong>Studies List</strong></h5>
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
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop