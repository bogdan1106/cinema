
@extends('pages.layout')

@section('title', '' . $picture->category == 1 ? 'Film ' : 'Animated Film '. $picture->title_eng . ' watch online')


@section('content')


    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <div class="latest-news-agile-info">
                <div class="col-md-8 latest-news-agile-left-content">
                    <div class="inner-agile-w3l-part-head">
                        <h3 class="w3l-inner-h-title">{{$picture->title_ru}} / {{$picture->title_eng}}</h3>
                        <p class="w3ls_head_para">{{$picture->getGenresInString()}}</p>
                    </div>
                    <div class="single video_agile_player">
                        <div class="text-center">
                            <img src="{{$picture->getImage()}}" alt="" width="400" />
                        </div>
                        <div class="text-center">
                            <h4>{{$picture->title_eng}} | Official Film | {{$picture->getActorsInString()}}</h4>

                        </div>

                        <div class="video_container text-center">
                            <iframe width="90%" height="500" src="https://www.youtube.com/embed/{{$picture->video_code}}" frameborder="0"  allowfullscreen></iframe>
                        </div>
                        </div>
                    <div class="single-agile-shar-buttons">
                        <h5 >Share This :</h5>
                        <ul>
                            <li>
                                <div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                            </li>
                            <li>
                                <div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
                            </li>
                            <li class="news-twitter">
                                <a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
                            <li>
                                <a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
                            <li>
                                <!-- Place this tag where you want the +1 button to render. -->
                                <div class="g-plusone" data-size="medium"></div>

                                <!-- Place this tag after the last +1 button tag. -->
                                <script type="text/javascript">
                                    (function() {
                                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                        po.src = 'https://apis.google.com/js/platform.js';
                                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                    })();
                                </script>
                            </li>
                        </ul>
                    </div>
                    @if($picture->getAdminComments())
                        @foreach($picture->getAdminComments() as $adminComment)
                            <div class="admin-text">
                                <h5>WRITTEN BY ADMIN ({{$adminComment->user->name}})</h5>
                                <div class="admin-text-left">
                                    <a href="#"><img src="{{$adminComment->user->getImage()}}" alt=""></a>
                                </div>
                                <div class="admin-text-right">
                                    <p>{{$adminComment->text}}</p>
                                    <span>View all posts by :<a href="#"> {{$adminComment->user->name}} </a></span>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <br>
                        @endforeach
                    @endif
                    <div class="response">
                        <h4>Comments</h4>
                        @if ($picture->comments)
                            @foreach($picture->getComments() as $comment)
                                <div class="media response-info">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img class="media-object" src="" alt="">
                                        </a>
                                        <h5><a href="#">{{$comment->user->name}}</a></h5>
                                    </div>
                                    <div class="media-body response-text-right">
                                        <p>{{$comment->text}}</p>
                                        <ul>
                                            <li>November 03, 2016</li>
                                            <li><a href="single.html"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                @endforeach
                            @endif

                    </div>
                    <div class="all-comments-info">
                        @if(auth()->guest())
                                <h3>Please register or login if you want to leave comment</h3>
                            @else
                        <h5 >LEAVE A COMMENT</h5>
                        <div class="agile-info-wthree-box">
                            <form action="{{route('comments.store')}}" method="post">
                                @csrf
                                <div class="col-md-12 form-info" >
                                    <textarea name="text" placeholder="Message"></textarea>
                                    <input type="hidden" name="picture_id" value="{{$picture->id}}">
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <input type="submit" value="SEND">
                                </div>
                                <div class="clearfix"> </div>
                            </form>
                        </div>
                            @endif
                    </div>
                </div>
                <div class="col-md-4 latest-news-agile-right-content">
                    <h4 class="side-t-w3l-agile">For Latest <span>Movies</span></h4>
                    <div class="side-bar-form">
                        <form action="#" method="post">
                            <input type="search" name="email" placeholder="Search here...." required="required">
                           <button type="submit">search</button>
                        </form>
                    </div>
                    <h4 class="side-t-w3l-agile">Hot <span>Topics</span></h4>
                        <ul class="side-bar-agile">
                            <li><a href="single.html">John Abraham, Sonakshi Sinha and Tahir ...</a><p>Sep 29, 2016</p></li>
                            <li><a href="single.html">Romantic drama about two people finding out that love</a><p>Feb 3, 2016</p></li>
                            <li><a href="single.html">Storks have moved on from delivering babies to packages ...</a><p>Aug 1, 2016</p></li>
                            <li><a href="single.html">John Abraham, Sonakshi Sinha and Tahir ...</a><p>Sep 29, 2016</p></li>
                            <li><a href="single.html">John Abraham, Sonakshi Sinha and Tahir ...</a><p>Sep 29, 2016</p></li>
                        </ul>



                            <div class="clearfix"> </div>
                            <div class="agile-info-recent">
                                <h4 class="side-t-w3l-agile">Best <span>pictures</span></h4>
                                <div class="w3ls-recent-grids">
                                    @foreach($bestPictures as $bestPicture)
                                        <div class="w3l-recent-grid">
                                            <div class="wom">
                                                <a href="{{route('watch', $bestPicture->slug)}}"><img src="{{$bestPicture->getImage()}}" alt=" " class="img-responsive"></a>
                                            </div>
                                            <div class="wom-right">
                                                <h5><a href={{route('watch', $bestPicture->slug)}}>{{$bestPicture->title_eng}}</a></h5>
                                                <p>{{$bestPicture->getGenres()}}</p>
                                                <ul class="w3l-sider-list">
                                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{$bestPicture->year}}</li>
                                                    <li><i class="fa fa-eye" aria-hidden="true"></i>{{$bestPicture->views}}</li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        @endforeach


                                </div>
                            </div>

                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!--//content-inner-section-->


@endsection