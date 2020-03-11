@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Project Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Edit</li>
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
                            <h3 class="card-title">Comment Edit</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
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
                        'route' => ['comments.update', $comment->id],
                        'method' => 'put',
                        ])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Text</label>
                                <input type="text" name="text" class="form-control" value="{{$comment->text}}">
                            </div>

                            <div class="marge icheck-primary d-inline">
                                <input type="checkbox" name="is_clear" id="checkboxPrimary1" {{$comment->is_clear ? 'checked' : ''}}>
                                <label for="checkboxPrimary1">Clear
                                </label>
                            </div>


                            <br>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Update" class="btn btn-success float-right">
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