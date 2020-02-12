@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Director {{$director->name}} edit</h3>

                            <div class="card-tools">

                            </div>


                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{Form::open([
                        'route' => ['directors.update', $director->id],
                        'method' => 'put',
                        ])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$director->name}}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Birth Date</label>
                                <input type="text" name="birth date" class="form-control" value="{{$director->birth_date ? $director->birth_date : ''}}" >
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="btn btn-secondary">Cancel</a>

                                    <input type="submit" value="Edit" class="btn btn-success float-right">
                                </div>
                            </div>
                        </div>

                    {{Form::close()}}
                    <!-- /.card-Categorybody -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection