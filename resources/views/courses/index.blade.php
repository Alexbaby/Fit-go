@extends('layouts.main')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Courses</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcourse">
                            <i class="fas fa-plus"></i></i>Add Course</button></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Fit Go Courses</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>

                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Duration</th>
                                    <th>Course Fee</th>
                                    <th width="280px">Action</th>
                                    <!-- <th>Engine version</th>
                                    <th>CSS grade</th> -->
                                </tr>
                                @foreach( $courses as $course)
                                <tr>
                                    <td>{{$course->course_name}}</td>
                                    <td>{{$course->course_duration}}</td>
                                    <td>{{$course->course_fee}}</td>
                                    <td>
                                        <form action="{{ route('course/remove',$course->id) }}" method="post">
                                            @csrf
                                            <a href="{{ route('course/edit',$course->id) }}" data-toggle="modal" data-target="#updateid"><i class="fas fa-edit"></i></a>&nbsp;

                                            <button type="submit"><i class="fas fa-trash"></i></button>
                                            @method('DELETE')

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<form enctype="multipart/form-data" id="courseForm" method="POST" action="{{ url ('course/create')}}">
    @csrf

    <div class="modal fade" id="addcourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert-danger"></div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <input type="text" name="course_name" id="course_name" class="form-control" aria-describedby="emailHelp" placeholder="Course Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Course Duration</label>
                        <input type="text" name="course_duration" id="course_duration" class="form-control" placeholder="Course Duration">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Course Fee</label>
                        <input type="text" name="course_fee" class="form-control" id="course_fee" placeholder="Course Fee">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary close-modal" id="ajaxSubmit">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form enctype="multipart/form-data" id="courseForm" method="POST" action="{{ url ('course/create')}}">
    @csrf

    <div class="modal fade" id="updateid" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary close-modal" id="#">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@section('scripts')

<script src="{{ asset ('js/addcourse.js')}}"></script>
<!-- <script>
    $(document).ready(function() {
        $('#ajaxSubmit').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('/course/create') }}",
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    course_name: $('#course_name').val(),
                    course_duration: $('#course_duration').val(),
                    course_fee: $('#course_fee').val(),
                },
                success: function(result) {
                    if (result.errors) {
                        console.log('errors', result);
                        $('.alert-danger').html('');

                        jQuery.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<p>' + value + '</p>');
                        });
                    } else {
                        console.log('inside this ');
                        $('#addcourse').modal('hide');
                        jQuery('.alert-danger').hide();
                        $('#open').hide();
                        window.location.reload();
                        // $('#addcourse').modal({'hide':true});
                    }
                }
            });
        });
    });
</script> -->
@endsection