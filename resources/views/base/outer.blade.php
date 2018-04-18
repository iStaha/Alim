<!doctype html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ilm - the Knowledge</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/transitions.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/color.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <script src="{{URL::asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

    <style type="text/css"> .news-item
{
    padding:4px 4px;
    margin:0px;
    border-bottom:1px dotted #555; 
}
.demo2{
    padding-left: 0px;
}

.panel-default {
     border-color: #FFF;
}

.pagination>li>a{
    color: #af8f0f;
}


</style>
</head>

<body class="tg-home tg-homefour">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../../../../browsehappy.com/default.htm">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id="tg-wrapper" class="tg-wrapper">
        <!--************************************
                Header Start
        *************************************-->
        <header id="tg-header" class="tg-header tg-headervtwo tg-headervthree tg-haslayout">
            <div class="tg-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="tg-addressinfo">
                                <li>
                                    <i class="icon-map-marker"></i>
                                    <address>Parraypora, Srinagar J&K</address>
                                </li>
                                <li>
                                    <i class="icon-clock"></i>
                                    <time datetime="2016-10-10">Mon - Sat 9:00 - 17:00</time>
                                </li>
                                <li>
                                    <i class="icon-phone-handset"></i>
                                    <span>+91 9797 022499</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-navigationarea">
                            <strong class="tg-logo"><a href="/"><img src="{{ asset('images/ilm.png') }}"  alt="University of Education and knowledge"></a></strong>
                            <div class="tg-navigationandsearch">
                                <nav id="tg-nav" class="tg-nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                        <ul>
                                            <li class=" current-menu-item">
                                                <a href="/">Home</a>

                                            </li>
                                            <li class="">
                                                <a href="/courses">Courses</a>

                                            </li>

                                            <li class="">
                                                <a href="/gallery">Gallery</a>

                                            </li>

                                            <li class="">
                                                <a href="/faculty">Faculties</a>

                                            </li>




                                            <li class="">
                                                <a href="/contact">Contact us</a>

                                            </li>

                                        </ul>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--************************************
                Header End
        *************************************-->
        <!--************************************
                Home Slider Start
        *************************************-->
         @yield('content')
        <!--************************************
                Main End
        *************************************-->
        <!--************************************
                Footer Start
        *************************************-->
        <footer id="tg-footer" class="tg-footer tg-haslayout">
            <div class="tg-signupbox">
                <div class="container">
                    <div class="tg-signuptextbox">
                        <h3>Free Signup!</h3>
                        <div class="tg-description">
                            <p>Subscribe Monthly Newsletter &amp; Get Latest New &amp; Updates.</p>
                        </div>
                    </div>
                    <form class="tg-formtheme tg-formsignupfree">
                        <fieldset>
                            <div class="form-group"><input type="text" name="emailid" class="form-control" placeholder="Enter Email ID"></div>
                            <div class="form-group"><button type="submit" class="tg-btn">Signup Now</button></div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="tg-footermiddlebar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="tg-widget tg-widgetcompanyinfo">
                                <div class="tg-widgetcontent">
                                    <strong class="tg-logo"><a href="index.html"><img src="{{ asset('images/ilm.png') }}" alt="image description"></a></strong>
                                    <div class="tg-description">
                                        <p>Ilm was a noble dream of a few public spirited persons, imbued with a burning desire ...<a href="/about">Read More</a></p>
                                    </div>

                                    <ul class="tg-socialicons">
                                        <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                        <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                        <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="tg-widget tg-widgetcompanyinfo">
                                <div class="tg-widgetcontent">
                                    <div class="tg-widgettitle">
                                        <h3>Address</h3>
                                    </div>
                                    <ul class="tg-infolist">
                                        <li>
                                            <i class="icon-location"></i>
                                            <address>Parraypora, Srinagar J&K, 190015</address>
                                           
                                        </li>
                                        <li>
                                            <i class="icon-phone-handset"></i>
                                            <span>+91 9797022499</span>
                                        </li>
                                       
                                        <li>
                                            <a href="mailto:info@kiesgr.org">
                                                <i class="icon-envelope"></i>
                                                <span>info@kiesgr.org</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="tg-widget tg-widgetcoursecategories">
                                <div class="tg-widgettitle">
                                    <h3>Qucik Links</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li><a href="/courses">Courses</a></li>
                                        <li><a href="/faculty">Faculty</a></li>
                                        <li><a href="/gallery">Gallery</a></li>
                                        <li><a href="/contact">Contact us</a></li>
                                        <li><a href="/about">About</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="tg-footerbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="tg-copyright">Copyright &copy; 2017 All Rights Reserved</span>
                            <nav class="tg-addnav">
                                <ul>
                                    <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                    <li><a href="javascript:void(0);">Term and Conditions</a></li>
                                    <li><a href="javascript:void(0);">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--************************************
                Footer End
        *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    <script src="{{URL::asset('js/vendor/jquery-library.js')}}"></script>
    <script src="{{URL::asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/mapclustering/data.json')}}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
    <script src="{{URL::asset('js/mapclustering/markerclusterer.min.js')}}"></script>
    <script src="{{URL::asset('js/mapclustering/infobox.js')}}"></script>
    <script src="{{URL::asset('js/mapclustering/map.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/isotope.pkgd.js')}}"></script>
    <script src="{{URL::asset('js/prettyPhoto.js')}}"></script>
    <script src="{{URL::asset('js/countdown.js')}}"></script>
    <script src="{{URL::asset('js/collapse.js')}}"></script>
    <script src="{{URL::asset('js/moment.js')}}"></script>
    <script src="{{URL::asset('js/gmap3.js')}}"></script>
    <script src="{{URL::asset('js/jquery.bootstrap.newsbox.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $(".demo2").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
            pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
             
    });
</script>

</body>

</html>
