@extends('layouts.main')


@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users</h1>
            </div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fas fa-plus"></i></i>Add Course</button></li>
                </ol>
            </div> -->
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Fit Go  Customers List</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Customer Course</th>
                                    <th>Customer Contact Number</th>
                                    <th>Customer Payment Due</th>
                                    <th>Customer Total Amount</th>
                                    <!-- <th>Engine version</th>
                                    <th>CSS grade</th> -->
                                </tr>
                                <tr>
                                    <td>Sam</td>
                                    <td>Personal T</td>
                                    <td>9567165878</td>
                                    <td>250</td>
                                    <td>1500</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection