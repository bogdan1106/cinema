
@extends('pages.layout')



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

                                    <div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">
                                            <div data-video="f2Z65fobH2I" id="video"> <img src="images/main/11.jpg" alt="" class="img-responsive" /> </div>
                                        </div>



                                        <div class="player-text">
                                            <p class="fexi_header">Force 2</p>
                                            <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Presenting the official trailer of Force 2 starring John Abraham, Sonakshi Sinha and Tahir Raj Bhasin

                                                A film by Abhinay Deo, Produced by Vipul Amrutlal Shah, JA entertainment Pvt. Ltd....</p>
                                            <p class="fexi_header_para"><span>Release On<label>:</label></span>Sep 29, 2016 </p>
                                            <p class="fexi_header_para">
                                                <span>Genres<label>:</label> </span>
                                                <a href="genre.html">Drama</a> |
                                                <a href="genre.html">Adventure</a> |
                                                <a href="genre.html">Family</a>
                                            </p>
                                            <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </p>
                                        </div>
                                    </div>

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
                                    <div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">
                                            <div data-video="fNKUgX8PhMA" id="video1"> <img src="images/main/22.jpg" alt="" class="img-responsive" /> </div>
                                        </div>


                                        <div class="player-text">
                                            <p class="fexi_header">Me Before You </p>
                                            <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Me Before You Official Trailer #2 (2016) - Emilia Clarke, Sam Claflin Movie HD

                                                A girl in a small town forms an unlikely bond with a recently-paralyzed man she's taking care of....</p>
                                            <p class="fexi_header_para"><span>Release On<label>:</label></span>Feb 3, 2016 </p>
                                            <p class="fexi_header_para">
                                                <span>Genres<label>:</label> </span>
                                                <a href="genre.html">Drama</a> |
                                                <a href="genre.html">Adventure</a> |
                                                <a href="genre.html">Family</a>
                                            </p>
                                            <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </p>
                                        </div>

                                    </div>
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
                                    <div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">
                                            <div data-video="BXEZFd0RT5Y" id="video2"> <img src="images/main/44.jpg" alt="" class="img-responsive" /> </div>
                                        </div>

                                        <div class="player-text">
                                            <p class="fexi_header">Storks </p>
                                            <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Starring: Andy Samberg, Jennifer Aniston, Ty Burrell Storks Official Trailer 3 (2016) - Andy Samberg Movie the company's top delivery stork, lands in hot water when the Baby Factory produces an adorable....... </p>
                                            <p class="fexi_header_para"><span>Release On<label>:</label></span>Aug 1, 2016 </p>
                                            <p class="fexi_header_para">
                                                <span>Genres<label>:</label> </span>
                                                <a href="genre.html">Drama</a> |
                                                <a href="genre.html">Adventure</a> |
                                                <a href="genre.html">Family</a>
                                            </p>
                                            <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </p>
                                        </div>

                                    </div>
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
                                    <p>2016</p>
                                    <div class="pull-right">
                                        {{$recentMovie->picture_rating}}
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
                            <p>2016</p>
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