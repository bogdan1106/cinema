@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Project Add</h1>
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
                            <h3 class="card-title">Picture Add</h3>

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
                        'route' => 'pictures.store',
                        'method' => 'post',
                        'files' => 'true',
                        ])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Ru Title</label>
                                <input type="text" name="title_ru" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Eng Title</label>
                                <input type="text" name="title_eng" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                {{
                                Form::select('category_id',
                                $categories,
                                null,
                                ['class' => 'form-control select2bs4'])

                                }}
                            </div>
                             
                            <div class="form-group">
                                <label for="inputCountry">Country</label>
                                {{Form::select(
                                'country_id',
                                $countries,
                                null,
                                ['class' => 'form-control select2bs4']
                                )}}
                            </div>

                            <div class="form-group">
                                <label>Genres</label>
                                {{
                                Form::select('genres[]',
                                $genres,
                                null,
                                ['class' => 'form-control select2bs4',

                                'multiple' => 'multiple' ,
                                'style' => 'width:100%',
                                 ' data-placeholder'=> "Select a Ganre",
                                ])

                                }}

                            </div>

                             
                            <div class="form-group">
                                <label for="inputStatus">Director</label>
                                {{
                                Form::select('director_id',
                                $directors,
                                null,
                                ['class' => 'form-control select2bs4'])

                                }}
                            </div>
                         
                            <div class="form-group">
                                <label>Actors</label>
                                {{
                                Form::select('actors[]',
                                $actors,
                                null,
                                ['class' => 'form-control select2bs4',

                                'multiple' => 'multiple' ,
                                'style' => 'width:100%',
                                 ' data-placeholder'=> "Select an Actors",
                                ])

                                }}

                            </div>
                            <div class="margin-20 form-group">
                                <div class="marge icheck-primary d-inline">
                                    <input type="checkbox" name="is_new" id="checkboxPrimary1">
                                    <label for="checkboxPrimary1">New Picture
                                    </label>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputName">Year</label>
                                <input type="text" name="year" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Rating</label>
                                <input type="text" name="picture_rating" class="form-control">
                            </div>

                             
                            <div class="form-group">
                                <label for="inputName">Kinopoisk id</label>
                                <input type="text" name="kinopoisk_picture_id" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Budget</label>
                                <input type="text" name="budget" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Picture Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
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
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Add actor</h3>


                        </div>
                        {{Form::open([
                       'route' => 'actors.store',
                       'method' => 'post',
                       'files' => 'true',
                       ])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Birth Date</label>
                                <input type="text" name="birth date" class="form-control">
                            </div>

                            <br>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Create" class="btn btn-success float-right">
                                </div>
                            </div>
                        </div>
                    {{Form::close()}}
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-secondary">
                        <div class="card-header success">
                            <h3 class="card-title">Add director</h3>


                        </div>
                        {{Form::open([
                       'route' => 'directors.store',
                       'method' => 'post',
                       'files' => 'true',
                       ])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Birth Date</label>
                                <input type="text" name="birth date" class="form-control">
                            </div>

                            <br>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Create" class="btn btn-success float-right">
                                </div>
                            </div>
                        </div>
                    {{Form::close()}}
                    <!-- /.card-body -->
                    </div>

                    <div class="card card-secondary">
                        <div class="card-header success">
                            <h3 class="card-title">Add country</h3>


                        </div>
                        {{Form::open([
                       'route' => 'countries.store',
                       'method' => 'post',
                       ])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">title</label>
                                <input type="text" name="title" class="form-control">
                            </div>



                            <br>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Create" class="btn btn-success float-right">
                                </div>
                            </div>
                        </div>
                    {{Form::close()}}
                    <!-- /.card-body -->
                    </div>
                <!-- /.card-Categorybody -->
                    <!-- /.card -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection