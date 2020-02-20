@extends('admin.layout')

@section('content')




    <div class="content-wrapper">
        <h1>Yoman</h1>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Simple Tables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Simple Tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Pictures</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Is verify</th>
                                        <th>Is admin</th>
                                        <th>Avatar</th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->is_verify ? 'yes' : '-'}}</td>
                                        <td>{{$user->is_admin ? 'yes' : '-'}}</td>

                                        <td><img src="{{$user->getAvatar()}}" alt="" width="150" >
                                            {{$user->getAvatar()}}
                                        </td>

                                        {{--<td><a href="{{route('pictures.edit', $picture->id)}}"--}}
                                               {{--class="fas fa-pencil-alt "></a>--}}

                                        {{--{{Form::open([--}}
                                        {{--'route' => ['pictures.destroy', $picture->id],--}}
                                        {{--'method' => 'delete'--}}
                                        {{--])}}--}}
                                            {{--<button type="submit" class="delete">--}}
                                                {{--<i href="#" class="fas fa-trash-alt"></i>--}}
                                            {{--</button>--}}
                                        {{--</td>--}}
                                            {{--{{Form::close()}}--}}
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    @endsection