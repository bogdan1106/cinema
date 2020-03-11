<div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">


                                            <div class="video-grid-single-page-agileits">
                                                <div data-video="{{$randomPicture->video_code}}" id="video"> <img src="images/main/11.jpg" alt="" class="img-responsive" /> </div>
                                            </div>
                                        </div>
                                        <div class="player-text">
                                            <p class="fexi_header text-center">{{$randomPicture->title_eng}}</p>
<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>{{$randomPicture->getShortDescription()}}</p>
<p class="fexi_header_para"><span>Year<label>:</label></span>{{$randomPicture->year}}</p>
<p class="fexi_header_para">
    <span>Genres<label>:</label> </span>

    @if($randomPicture->genres)
        @foreach (@$randomPicture->genres as $genre)
            <a href="genre.html">{{$genre->title}}</a>

        @endforeach
    @endif
</p>
</div>
</div>