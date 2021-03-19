@extends('layouts.frontend_layout')
@section('content')
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h3 class="m-0 font-weight-bold text-primary">Subject List</h3>
            </div>
            <div class="col-md-6">
                <a href="{{route('subjects.create')}}" class="btn btn-primary btn-sm float-right">
                    <i class="fas fa-user-plus"></i> Create Subject
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>  
                        <th>Student</th>
                        <th>Subject</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $subject)

                    <tr>
                        <td>{{$subject->user->name}}</td>
                        <td>{{$subject->name}}</td>
                        <td>
                            <a href="{{ route('subjects.show', $subject->uuid) }}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('subjects.edit', $subject->uuid) }}" class="btn btn-success btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <!-- Button trigger modal -->
                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$subject->uuid}}">
                                <i class="fas fa-trash"></i>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{$subject->uuid}}" tabindex="-1" aria-labelledby="deleteModal{{$subject->uuid}}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('subjects.destroy', $subject->uuid) }}" method="POST">       
                                            @csrf
                                            @method('DELETE')
                                                Are you sure delete {{$subject->name}}?
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <button type="button" data-dismiss="modal" class="btn btn-secondary btn-sm">
                                                            <i class="fas fa-times"></i> Cancel
                                                        </button>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-check"></i> Yes, sure
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
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
@section('footer_code')
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@stop