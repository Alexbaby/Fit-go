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

@endsection

@section('scripts')

@endsection