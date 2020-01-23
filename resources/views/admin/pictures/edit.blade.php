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
                        'route' => ['pictures.update', $picture->id],
                        'method' => 'put',
                        'files' => 'true',
                        ])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Ru Title</label>
                                <input type="text" name="title_ru" class="form-control" value="{{$picture->title_ru}}">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Eng Title</label>
                                <input type="text" name="title_eng" class="form-control" value="{{$picture->title_eng}}">
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                {{
                                Form::select('category_id',
                                $categories,
                                $picture->category_id,
                                ['class' => 'form-control custom-select'])

                                }}
                            </div>


                            <div class="form-group">
                                <label>Genres</label>
                                {{
                                Form::select('genres[]',
                                $genres,
                                $picture->genres()->pluck('genre_id'),
                                ['class' => 'form-control select2bs4',
                                'multiple' => 'multiple' ,
                                'style' => 'width:100%',
                                 ' data-placeholder'=> "Select a Ganre",
                                ])

                                }}

                            </div>
                            //this
                            <div class="form-group">
                                <label for="inputStatus">Director</label>
                                {{
                                Form::select('director_id',
                                $directors,
                                $picture->director_id,
                                ['class' => 'form-control select2bs4'])

                                }}
                            </div>
                            //this
                            <div class="form-group">
                                <label>Actors</label>
                                {{
                                Form::select('actors[]',
                                $actors,
                                $picture->actors()->pluck('actor_id'),
                                ['class' => 'form-control select2bs4',

                                'multiple' => 'multiple' ,
                                'style' => 'width:100%',
                                 ' data-placeholder'=> "Select an Actors",
                                ])

                                }}

                            </div>

                                <div class="form-group">
                                    <label for="inputCountry">Country</label>
                                    {{Form::select(
                                    'country_id',
                                    $countries,
                                    $picture->country_id,
                                    ['class' => 'form-control select2bs4']
                                    )}}
                                </div>


                            <div class="margin-20 form-group">
                                <div class="marge icheck-primary d-inline">
                                    <input type="checkbox" name="is_new" id="checkboxPrimary1" {{$picture->is_new ? 'checked' : ''}}>
                                    <label for="checkboxPrimary1">New Picture
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName">Year</label>
                                <input type="text" name="year" class="form-control" value="{{$picture->year}}">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Budget</label>
                                <input type="text" name="budget" class="form-control" value="{{$picture->budget}}">
                            </div>




                            <div class="form-group">
                                <label for="inputDescription">Picture Description</label>
                                <textarea name="description" class="form-control" rows="4"> {{$picture->description}}</textarea>
                            </div>
                            <img src="{{$picture->getImage()}}" alt="" width="300">
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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                    {{Form::close()}}
                    <!-- /.card-Categorybody -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Budget</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Estimated budget</label>
                                <input type="number" id="inputEstimatedBudget" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputSpentBudget">Total amount spent</label>
                                <input type="number" id="inputSpentBudget" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedDuration">Estimated project duration</label>
                                <input type="number" id="inputEstimatedDuration" class="form-control">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection