@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h5>Source List</h5>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Setup</li>
                            <li class="breadcrumb-item active">Source List</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-12">
                            <button style="float: right;" onclick="add_new()" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> </button>
                            </div>
                            </div>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Website Link</th>
                                    <th width="280px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>001</td>
                                    <td>Ali Baba</td>
                                    <td>http://www.alibaba.com</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="http://localhost/bank-app/public/users/1/edit"><i class="fa fa-edit"></i></a>
                                        <form method="POST" action="http://localhost/bank-app/public/users/1" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="C9WGVTzhonPP9zxMi4t9rVvOQd4BWSi9r3DNgBhL">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>002</td>
                                    <td>WeBoc</td>
                                    <td>http://www.weBoc.com</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="http://localhost/bank-app/public/users/1/edit"><i class="fa fa-edit"></i></a>
                                        <form method="POST" action="http://localhost/bank-app/public/users/1" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="C9WGVTzhonPP9zxMi4t9rVvOQd4BWSi9r3DNgBhL">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>003</td>
                                    <td>T-24</td>
                                    <td>http://www.t24.com</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="http://localhost/bank-app/public/users/1/edit"><i class="fa fa-edit"></i></a>
                                        <form method="POST" action="http://localhost/bank-app/public/users/1" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="C9WGVTzhonPP9zxMi4t9rVvOQd4BWSi9r3DNgBhL">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>004</td>
                                    <td>Daraz</td>
                                    <td>https://www.daraz.pk</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="http://localhost/bank-app/public/users/1/edit"><i class="fa fa-edit"></i></a>
                                        <form method="POST" action="http://localhost/bank-app/public/users/1" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="C9WGVTzhonPP9zxMi4t9rVvOQd4BWSi9r3DNgBhL">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('Setup.Sources.modal')
    <script>
        function add_new() {
            $("#new").modal();
        }
    </script>
    <script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
@endsection<!-- jQuery -->