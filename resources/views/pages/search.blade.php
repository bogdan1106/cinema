
@extends('pages.layout')
@section('title', 'Main page')


@section('content')


    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <div class="inner-agile-w3l-part-head">
                <h3 class="w3l-inner-h-title text-left" >Search results</h3>
                <p class="w3ls_head_para">find {{$pictures->count() }}</p>
            </div>
            <div class="latest-news-agile-info">
                <div class="col-md-8 latest-news-agile-left-content">
                    @if($pictures)
                        @foreach($pictures as $picture )
                            <div class="w3-agileits-news-one">
                                <div class="wthree-news-img">
                                    <a href="{{route('watch', $picture->slug)}}"><img src="{{$picture->getImage()}}" alt=""></a>
                                </div>
                                <div class="wthree-news-info">
                                    <h5><a href="{{route('watch', $picture->slug)}}">{{$picture->title_ru}}/{{$picture->title_eng}} {{$picture->year}}</a></h5>
                                    <div class="agile-post">
                                        by <a href="#" title="w3ls" rel="author">Admin</a> on	Oct 30, 2016 with <a href="#">2 comments</a>
                                    </div>
                                    <p>{{$picture->getShortDescription()}}</p>
                                    <a class="new-more" href="{{route('watch', $picture->slug)}}">Watch online</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        @endforeach
                    @endif


                </div>
                <div class="col-md-4 latest-news-agile-right-content">
                    <h4 class="side-t-w3l-agile">For Latest <span>Movies</span></h4>
                    <div class="side-bar-form">
                        <form action="#" method="post">
                            <input type="search" name="email" placeholder="Search here...." required="required">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                    <h3 class="side-t-w3l-agile">Hot <span>Topics</span></h3>
                        <ul class="side-bar-agile">
                            <li><a href="news-single.html">John Abraham, Sonakshi Sinha and Tahir ...</a><p>Sep 29, 2016</p></li>
                            <li><a href="news-single.html">Romantic drama about two people finding out that love</a><p>Feb 3, 2016</p></li>
                            <li><a href="news-single.html">Storks have moved on from delivering babies to packages ...</a><p>Aug 1, 2016</p></li>
                            <li><a href="news-single.html">John Abraham, Sonakshi Sinha and Tahir ...</a><p>Sep 29, 2016</p></li>
                            <li><a href="news-single.html">John Abraham, Sonakshi Sinha and Tahir ...</a><p>Sep 29, 2016</p></li>
                        </ul>
                        <h3 class="side-t-w3l-agile">Latest <span>Trailer</span></h3>
                            <div class="video_agile_player sidebar-player">
                                <div class="video-grid-single-page-agileits">
                                    <div data-video="fNKUgX8PhMA" id="video1"> <img src="images/main/22.jpg" alt="" class="img-responsive"> <div id="play"></div></div>
                                </div>


                                <div class="player-text side-bar-info">
                                    <p class="fexi_header">Me Before You </p>
                                    <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Me Before You Official Trailer #2 (2016) - Emilia Clarke, Sam Claflin Movie HD

                                        A girl in a small town forms an unlikely....</p>
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
                            <div class="clearfix"> </div>
                            <div class="agile-info-recent">
                                <h4 class="side-t-w3l-agile">Latest <span>Trailer</span></h4>
                                <div class="w3ls-recent-grids">
                                    <div class="w3l-recent-grid">
                                        <div class="wom">
                                            <a href="news-single.html"><img src="images/main/m12.jpg" alt=" " class="img-responsive"></a>
                                        </div>
                                        <div class="wom-right">
                                            <h5><a href="news-single.html">Lorem Integer rutrum</a></h5>
                                            <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                                                Ut tellus dolor, dapibus eget.</p>
                                            <ul class="w3l-sider-list">
                                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>On Jan 12, 2016</li>
                                                <li><i class="fa fa-eye" aria-hidden="true"></i> 2602</li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="w3l-recent-grid">
                                        <div class="wom">
                                            <a href="news-single.html"><img src="images/main/m13.jpg" alt=" " class="img-responsive"></a>
                                        </div>
                                        <div class="wom-right">
                                            <h5><a href="news-single.html">Lorem Integer rutrum</a></h5>
                                            <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                                                Ut tellus dolor, dapibus eget.</p>
                                            <ul class="w3l-sider-list">
                                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>On Mar 3, 2016</li>
                                                <li><i class="fa fa-eye" aria-hidden="true"></i> 2742</li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="w3l-recent-grid">
                                        <div class="wom">
                                            <a href="news-single.html"><img src="images/main/m14.jpg" alt=" " class="img-responsive"></a>
                                        </div>
                                        <div class="wom-right">
                                            <h5><a href="news-single.html">Lorem Integer rutrum</a></h5>
                                            <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                                                Ut tellus dolor, dapibus eget.</p>
                                            <ul class="w3l-sider-list">
                                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>On Oct 13, 2016</li>
                                                <li><i class="fa fa-eye" aria-hidden="true"></i> 2802</li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="blog-pagenat-wthree">
                <ul>
                    <li><a class="frist" href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>

                    <li><a class="last" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--//content-inner-section-->



@endsection