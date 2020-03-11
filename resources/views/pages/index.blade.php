
@extends('pages.layout')
@section('title', 'Main page')


@section('content')



    <!-- //Modal1 -->
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <!--/agileinfo_tabs-->
            <div class="agileinfo_tabs">
                <!--/tab-section-->
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Recent</li>
                        <li>New</li>
                        <li>Top Rating </li>

                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab1">
                            <div class="tab_movies_agileinfo">
                                <div class="w3_agile_featured_movies">

                                   @include('pages.parts.random_picture')

                                    <div class="col-md-7 wthree_agile-movies_list">

                                        @foreach($recentPictures as $recentPicture)

                                            <div class="w3l-movie-gride-agile">
                                                <a href="{{route('watch', $recentPicture->slug)}}" class="hvr-sweep-to-bottom"><img src="{{$recentPicture->getImage()}}" title="Movies Pro" class="img-responsive" alt=" " width="250px" height="300px">
                                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                                </a>

                                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                    <div class="w3l-movie-text">
                                                        <h6><a href="{{route('watch', $recentPicture->slug)}}">{{$recentPicture->title_eng}}</a></h6>
                                                    </div>
                                                    <div class="mid-2 agile_mid_2_home">
                                                        <p>{{$recentPicture->year}}</p>
                                                        <div class=" pull-right">
                                                            {{$recentPicture->picture_rating}}
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                @if($recentPicture->year == date('Y'))
                                                    <div class="ribben">
                                                        <p>NEW</p>
                                                    </div>
                                                @endif()
                                            </div>
                                        @endforeach()



                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="cleafix"></div>
                            </div>
                        </div>
                        <div class="tab2">
                            <div class="tab_movies_agileinfo">
                                <div class="w3_agile_featured_movies">
                                    @include('pages.parts.random_picture')
                                    <div class="col-md-7 wthree_agile-movies_list">
                                        @if($newPictures)
                                            @foreach($newPictures as $newPicture)

                                                <div class="w3l-movie-gride-agile">
                                                    <a href="{{route('watch', $newPicture->slug)}}" class="hvr-sweep-to-bottom"><img src="{{$newPicture->getImage()}}" title="Movies Pro" class="img-responsive" alt=" " width="250px" height="300px">
                                                        <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                                    </a>

                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="{{route('watch', $newPicture->slug)}}">{{$newPicture->title_eng}}</a></h6>
                                                        </div>
                                                        <div class="mid-2 agile_mid_2_home">
                                                            <p>{{$newPicture->year}}</p>
                                                            <div class=" pull-right">
                                                                {{$newPicture->picture_rating}}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    @if($newPicture->year == date('Y'))
                                                        <div class="ribben">
                                                            <p>NEW</p>
                                                        </div>
                                                    @endif()
                                                </div>
                                            @endforeach()
                                        @endif

                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="cleafix"></div>
                            </div>
                        </div>
                        <div class="tab3">
                            <div class="tab_movies_agileinfo">
                                <div class="w3_agile_featured_movies">
                                    @include('pages.parts.random_picture')
                                    <div class="col-md-7 wthree_agile-movies_list">

                                        @foreach($popularPictures as $popularPicture)

                                            <div class="w3l-movie-gride-agile">
                                                <a href="{{route('watch', $popularPicture->slug)}}" class="hvr-sweep-to-bottom"><img src="{{$popularPicture->getImage()}}" title="Movies Pro" class="img-responsive" alt=" " width="250px" height="300px">
                                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                                </a>

                                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                    <div class="w3l-movie-text">
                                                        <h6><a href="{{route('watch', $popularPicture->slug)}}">{{$popularPicture->title_eng}}</a></h6>
                                                    </div>
                                                    <div class="mid-2 agile_mid_2_home">
                                                        <p>{{$popularPicture->year}}</p>
                                                        <div class=" pull-right">
                                                            {{$popularPicture->picture_rating}}
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                @if($popularPicture->year == date('Y'))
                                                    <div class="ribben">
                                                        <p>NEW</p>
                                                    </div>
                                                @endif()
                                            </div>
                                        @endforeach()

                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="cleafix"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--//tab-section-->
            <h3 class="agile_w3_title"> Latest <span>Movies</span></h3>
            <!--/movies-->
            <div class="w3_agile_latest_movies">

                <div id="owl-demo" class="owl-carousel owl-theme">
                    @foreach($recentMovies as $recentMovie)
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
                                <a href="{{route('watch', ['slug' => $recentMovie->slug])}}" class="hvr-sweep-to-bottom"><img src="{{$recentMovie->getImage()}}" title="Movies Pro" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="{{route('watch', ['slug' => $recentMovie->slug])}}">{{$recentMovie->title_eng}}</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>{{$recentMovie->year}}</p>
                                        <div class="pull-right">
                                           <h4> {{$recentMovie->picture_rating}}</h4>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                @if($recentMovie->year == date('Y'))
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                @endif()
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <!--//movies-->
            <h3 class="agile_w3_title">Best <span>Cartoons</span> </h3>
            <!--/requested-movies-->
            <div class="wthree_agile-requested-movies">

                @foreach($bestCartoons as $bestCartoon)

                    <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                        <a href="{{route('watch', $bestCartoon->slug)}}" class="hvr-sweep-to-bottom"><img src="{{$bestCartoon->getImage()}}" title="Movies Pro" class="img-responsive" alt=" ">
                            <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="{{route('watch', $bestCartoon->slug)}}">{{$bestCartoon->title_eng}}</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>{{$bestCartoon->year}}</p>
                                <div class="pull-right">
                                    {{$bestCartoon->picture_rating}}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        @if($bestCartoon->year == date('Y'))
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        @endif()
                    </div>

                @endforeach





                <div class="clearfix"></div>
            </div>
            <!--//requested-movies-->

        </div>
    </div>
    <!--//content-inner-section-->



@endsection