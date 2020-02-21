
@extends('pages.layout')



@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <br><br><br><br>
            <div class="col-md-9">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{$user->name}} Edit</h3>

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
                    'route' => ['users.update', $user->id],
                    'method' => 'put',
                    'files' => 'true',
                    ])}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}">
                        </div>

                        <div class="form-group">
                            <label for="inputName">Email</label>
                            <input type="text" name="email" class="form-control" value="{{$user->email}}">
                        </div>

                        <img src="{{$user->getImage()}}" alt="" width="300">
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>

                            </div>
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
    <br><br><br><br><br><br><br><br>



        </div>
    </div>
</div>



@endsection