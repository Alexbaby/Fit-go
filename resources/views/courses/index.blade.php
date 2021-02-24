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
                    <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
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
                                    <!-- <th>Engine version</th>
                                    <th>CSS grade</th> -->
                                </tr>
                                <tr>
                                    <td>personal training</td>
                                    <td>cardio</td>
                                    <td>multi</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form  enctype="multipart/form-data" id="form">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <input type="text" name="course_name" id="course_name" class="form-control" id="courseid" aria-describedby="emailHelp" placeholder="Course Name">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Course Duration</label>
                        <input type="text" name="course_duration" id="course_duration" class="form-control" id="coursedid" placeholder="Course Duration">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Course Fee</label>
                        <input type="text" name="course_duration" class="form-control" id="course_duration" placeholder="Course Fee">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary close-modal" id="save">Save changes</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ asset ('js/jquery-3.3.1.min.js' )}}" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready ( function()   {
 
    $('#save').click(function (e)   {
        console.log('da');
      
    })
})
</script>
@endsection