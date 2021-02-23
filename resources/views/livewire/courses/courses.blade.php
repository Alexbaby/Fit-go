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
            <div class="modal-body">
                <form action="{{ route ('course.create')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <input type="text" name="coursename" class="form-control" id="courseid" aria-describedby="emailHelp" placeholder="Course Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Course Duration</label>
                        <input type="text" name="courseduration" class="form-control" id="coursedid" placeholder="Course Duration">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Course Fee</label>
                        <input type="text" name="coursefee" class="form-control" id="coursefeeid" placeholder="Course Fee">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
