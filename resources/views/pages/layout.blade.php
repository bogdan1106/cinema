
<!DOCTYPE html>
<html>
<head>


    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    {{--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);--}}
        {{--function hideURLbar(){ window.scrollTo(0,1); } </script>--}}
    <!-- //for-mobile-apps -->
    <link href="/css/main/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up -->
    <link href="/css/main/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <link href="/css/main/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="/css/main/zoomslider.css" />
    <link rel="stylesheet" type="text/css" href="/css/main/style.css" />
    <link href="/css/main/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="js/main/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
</head>
<body>
<div id="demo-1" class="banner-inner">
    <div class="banner-inner-dott">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="inner-header-agile part2">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a  href="/"><span>M</span>ovies <span>P</span>ro</a></h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/">Home</a></li>
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Genre <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown genres-list">
                                                    @foreach ($genres1 as $genre)

                                                    <li class="text-center"><a href="{{$genre->slug}}">{{$genre->title}}</a></li>
                                                        @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown genres-list">
                                                    @foreach ($genres2 as $genre)

                                                    <li class="text-center"><a href="{{$genre->slug}}">{{$genre->title}}</a></li>
                                                        @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown genres-list">
                                                    @foreach ($genres3 as $genre)

                                                    <li class="text-center"><a href="{{$genre->slug}}">{{$genre->title}}</a></li>
                                                        @endforeach
                                            </ul>
                                        </div>

                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="series.html">tv - series</a></li>
                            <li><a href="{{route('news')}}">news</a></li>
                            <li><a href="/admin">Admin</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="genre.html">Asia</a></li>
                                                <li><a href="genre.html">France</a></li>
                                                <li><a href="genre.html">Taiwan</a></li>
                                                <li><a href="genre.html">United States</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="genre.html">China</a></li>
                                                <li><a href="genre.html">HongCong</a></li>
                                                <li><a href="genre.html">Japan</a></li>
                                                <li><a href="genre.html">Thailand</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="genre.html">Euro</a></li>
                                                <li><a href="genre.html">India</a></li>
                                                <li><a href="genre.html">Korea</a></li>
                                                <li><a href="genre.html">United Kingdom</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="list.html">A - z list</a></li>
                            <li ><a href="contact.html">Contact</a></li>

                        <!----User -->
                            @if(Auth::user())
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <li>
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <li><h4><a href="{{route('edit')}}">Edit</a></h4></li>
                                                    <li><h4><a href="{{route('logout')}}">Logout</a></h4></li>
                                                </ul>
                                            </div>

                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            <!----End User -->
                        </ul>
                        </li>

                        </ul>

                    </div>
                    <div class="clearfix"> </div>
                </nav>
                <div class="w3ls_search">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="{{route('search')}}" method="post">
                            @csrf
                            <input name="search" type="search" placeholder="Search...">
                        </form>
                    </div>
                    <div class="col-6">
                        @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status')}}
                            </div>
                        @endif
                    </div>

                </div>

            </div>

        </div>
        <!--//header-w3l-->
    </div>
</div>
<!--/banner-section-->
<!--//main-header-->
<!--/banner-bottom-->
<div class="w3_agilits_banner_bootm">

<div class="w3_agilits_inner_bottom">
<div class="col-md-6 wthree_agile_login">


<ul>
<li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 009 455 4088</li>
    @if(Auth::guest())
<li><a href="#" class="login"  data-toggle="modal" data-target="#myModal4">Login</a></li>
<li><a href="#" class="login reg"  data-toggle="modal" data-target="#myModal5">Register</a></li>
    @endif
    <li class="right">

    </li>

</ul>


</div>

<div class="col-md-6 wthree_share_agile">


</div>
</div>
</div>
<!--//banner-bottom-->
<!-- Modal1 -->

@include('pages.modal.auth')

@yield('content');

<!--/footer-bottom-->
<div class="contact-w3ls" id="contact">
    <div class="footer-w3lagile-inner">
        <h2>Sign up for our <span>Newsletter</span></h2>
        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus
            tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
        <div class="footer-contact">
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Enter your email...." required=" ">
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="footer-grids w3-agileits">
            <div class="col-md-2 footer-grid">
                <h4>Release</h4>
                <ul>
                    <li><a href="#" title="Release 2016">2016</a></li>
                    <li><a href="#" title="Release 2015">2015</a></li>
                    <li><a href="#" title="Release 2014">2014</a></li>
                    <li><a href="#" title="Release 2013">2013</a></li>
                    <li><a href="#" title="Release 2012">2012</a></li>
                    <li><a href="#" title="Release 2011">2011</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>Movies</h4>
                <ul>

                    <li><a href="genre.html">ADVENTURE</a></li>
                    <li><a href="comedy.html">COMEDY</a></li>
                    <li><a href="series.html">FANTASY</a></li>
                    <li><a href="series.html">ACTION  </a></li>
                    <li><a href="genre.html">MOVIES  </a></li>
                    <li><a href="horror.html">HORROR  </a></li>

                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>Review Movies</h4>
                <ul class="w3-tag2">
                    <li><a href="comedy.html">Comedy</a></li>
                    <li><a href="horror.html">Horror</a></li>
                    <li><a href="series.html">Historical</a></li>
                    <li><a href="series.html">Romantic</a></li>
                    <li><a href="series.html">Love</a></li>
                    <li><a href="genre.html">Action</a></li>
                    <li><a href="single.html">Reviews</a></li>
                    <li><a href="comedy.html">Comedy</a></li>
                    <li><a href="horror.html">Horror</a></li>
                    <li><a href="series.html">Historical</a></li>
                    <li><a href="series.html">Romantic</a></li>
                    <li><a href="genre.html">Love</a></li>
                    <li><a href="comedy.html">Comedy</a></li>
                    <li><a href="horror.html">Horror</a></li>
                    <li><a href="genre.html">Historical</a></li>

                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>Latest Movies</h4>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="images/main/1.jpg" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">eveniet ut molesti</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="images/main/2.jpg" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">earum rerum tenet</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid1">

                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="images/main/4.jpg" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">eveniet ut molesti</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="images/main/3.jpg" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">earum rerum tenet</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>


            </div>
            <div class="col-md-2 footer-grid">
                <h4 class="b-log"><a href="index.html"><span>M</span>ovies <span>P</span>ro</a></h4>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="images/main/m1.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="images/main/m2.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="images/main/m3.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="images/main/m4.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="images/main/m5.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="images/main/m6.jpg" alt=" " class="img-responsive"></a>
                </div>

                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
            <ul class="bottom-links-agile">
                <li><a href="icons.html" title="Font Icons">Icons</a></li>
                <li><a href="short-codes.html" title="Short Codes">Short Codes</a></li>
                <li><a href="contact.html" title="contact">Contact</a></li>

            </ul>
        </div>
        <h3 class="text-center follow">Connect <span>Us</span></h3>
        <ul class="social-icons1 agileinfo">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>

    </div>

</div>
<div class="w3agile_footer_copy">
    <p>© 2017 Movies Pro. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/main/jquery-1.11.1.min.js"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="/js/main/jquery.zoomslider.min.js"></script>
<!-- search-jQuery -->
<script src="/js/main/main.js"></script>
<script src="/js/main/simplePlayer.js"></script>
<script>
    $("document").ready(function() {
        $("#video").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video1").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video2").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video3").simplePlayer();
    });
</script>

<!-- pop-up-box -->
<script src="/js/main/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box -->

<div id="small-dialog1" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<script>
    $(document).ready(function() {
        $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<script src="/js/main/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<link href="/css/main/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="/js/main/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay : true,
            navigation :true,

            items : 5,
            itemsDesktop : [640,4],
            itemsDesktopSmall : [414,3]

        });

    });
</script>

<!--/script-->
<script type="text/javascript" src="/js/main/move-top.js"></script>
<script type="text/javascript" src="/js/main/easing.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--end-smooth-scrolling-->
<script src="/js/main/bootstrap.js"></script>



</body>
</html>
