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
                                        <th>Name Ru</th>
                                        <th>Name eng</th>
                                        <th>Category</th>
                                        <th>Genres</th>
                                        <th>Actors</th>
                                        <th>Director</th>
                                        <th>New</th>
                                        <th>Year</th>
                                        <th>Budget</th>
                                        {{--<th>Views</th>--}}
                                        <th>Description</th>
                                        {{--<th>Date</th>--}}
                                        <th>Poster</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pictures as $picture)
                                    <tr>
                                        <td>{{$picture->id}}</td>
                                        <td>{{$picture->title_ru}}</td>
                                        <td>{{$picture->title_eng}}</td>
                                        <td>{{$picture->category->title}}</td>
                                        <td>
                                            {{$picture->getGenres()}}
                                        </td>
                                        <td>
                                            {{$picture->getActors()}}
                                        </td>
                                        <td>{{$picture->director->name}}</td>
                                        <td>{{($picture->is_new ? 'New' : '')}}</td>
                                        <td>{{$picture->year}}</td>
                                        <td>{{$picture->budget}}</td>
                                        {{--<td>{{$picture->views}}</td>--}}
                                        <td>{{$picture->description}}</td>
                                        {{--<td>{{$picture->date}}</td>--}}
                                        <td><img src="{{$picture->getImage()}}" alt="" width="150" ></td>

                                        <td><a href="{{route('pictures.edit', $picture->id)}}"
                                               class="fas fa-pencil-alt "></a>

                                        {{Form::open([
                                        'route' => ['pictures.destroy', $picture->id],
                                        'method' => 'delete'
                                        ])}}
                                            <button type="submit" class="delete">
                                                <i href="#" class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                            {{Form::close()}}
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