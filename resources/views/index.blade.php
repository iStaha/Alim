@extends('base.outer')

@section('content')

        
        <!--************************************
                Header End
        *************************************-->
        <!--************************************
                Home Slider Start
        *************************************-->
        <div id="tg-homeslider" class="tg-homeslider tg-homeslidervthree tg-homeslidervfour owl-carousel tg-btnround tg-haslayout">
            <div class="item">
                <figure>
                    <img src="images/slider/img-07.jpg" alt="image description">
                    <figcaption class="tg-slidercontent">
                        <div class="tg-slidercontentbox">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h1>
                                            <!--<span>We can ensure you that, You will get the best education service from us.Our internal and external services will impress you.</span>-->
                                            <span> Education for all need to Learn</span>
                                        </h1>

                                        <p style="font-size: 24px;color: #fff;font-style: italic;line-height: 35px;margin-bottom: 40px;" class="slideInUp animated">We can ensure you that, You will get the best education service from us.Our internal and external services will impress you.</p>
                                        <a class="tg-btn" href="coursegridtest.html">View Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="item">
                <figure>
                    <img src="images/slider/img-08.jpg" alt="image description">
                    <figcaption class="tg-slidercontent">
                        <div class="tg-slidercontentbox">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h1>Offering!<span>Best Teaching Skills</span></h1>
                                        <a class="tg-btn" href="javascript:void(0);">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="item">
                <figure>
                    <img src="images/slider/img-09.jpg" alt="image description">
                    <figcaption class="tg-slidercontent">
                        <div class="tg-slidercontentbox">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h1>Offering!<span>Best Teaching Skills</span></h1>
                                        <a class="tg-btn" href="javascript:void(0);">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="tg-tickerbox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <span>Daily Alerts:</span>
                        <div id="tg-ticker" class="tg-ticker owl-carousel">
                           
                          @if(!empty($dal) &&  $dal->count())
                                             @foreach ($dal as  $link)
                            <div class="item">
                                <div class="tg-description">
                                    <p>{{$link->alert}}</p>
                                </div>
                            </div>

                             @endforeach 

                                    @else
            There is no data.
        @endif 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Home Slider End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="tg-sectionspace tg-haslayout">
                                <div class="tg-shortcode tg-welcomeandgreeting tg-welcomeandgreeting-v2">
                                    <figure><img src="images/img-03.jpg" alt="image description"></figure>
                                    <div class="tg-shortcodetextbox">
                                        <h2>Welcome &amp; Greetings!</h2>
                                        <div class="tg-description">
                                            <p>Its genesis lines in a urge to set standards of excellence and perfection in the quest for a place in the Entrence Exams. The objective of the programs is to provide education in a different, innovation and affable learning environment in the challenging field of NEET preparation. The institute is guided by only one vision 'Excellence in career education'. The recent changes in the NEET pattern has increase the need of a systematic and planned approach towards preparation. Our constant endeavor will be to update the courses we offer and also take initiatives to start new courses so that student are kept abreast with the latest developments and methodologies in NEET coaching. ...</p>
                                        </div>
                                        <span class="tg-name">Mr. Kar Khursheed Aalam</span>
                                        <span class="tg-designation">Chairman KIE</span>
                                        <div class="tg-btnpluslogo">
                                            <a class="tg-btn" href="/about">read more</a>
                                            <strong class="tg-universitylogo"><a href="javascript:void(0);"><img src="images/ilm.png" alt="image description"></a></strong>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                            <div id="tg-content" class="tg-content">
                                <section class="tg-sectionspace tg-haslayout">
                                    <div class="tg-borderheading">
                                        <h2>Latest Events</h2>
                                    </div>
                                    <div class="tg-events">
                                        <div class="row">

                                           @if(!empty($even) &&  $even->count())
                                             @foreach ($even as  $link)
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                <article class="tg-themepost tg-eventpost">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/events/{{$link->img}}" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span>{{$link->date}}</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="/event/{{$link-> title}}">{{$link->title}}</a></h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>{{$link->description}} <a href="/event">Read More</a></p>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            @endforeach 

                                    @else
            <tr>
                <td colspan="10">There is no data.</td>
            </tr>
        @endif 
                                           
                                        </div>
                                    </div>
                                </section>
            
                                <section class="tg-sectionspace tg-haslayout">
                                    <div class="tg-latestnews">
                                        <div class="tg-borderheading">
                                            <h2>Latest News</h2>
                                        </div>
                                        <div id="tg-latestnewsslider" class="tg-latestnewsslider owl-carousel tg-posts">
                                           
                                           @if(!empty($news) &&  $news->count())
                                             @foreach ($news as  $link)

                                            <div class="item">
                                                <article class="tg-themepost tg-newspost">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/themepost/{{$link->img}}" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span>{{ $link-> date}}</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="/news/{{$link-> title}}">{{ $link-> title}}</a></h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>{{ $link-> description}} <a href="/news">Read More</a></p>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                              @endforeach 

                                    @else
            <tr>
                <td colspan="10">There is no data.</td>
            </tr>
        @endif 
                                            
                                        </div>
                                        <!--<div class="tg-btnsbox">
                                            <a class="tg-btn" href="javascript:void(0);">view all news</a>
                                        </div>-->
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <aside id="tg-sidebar" class="tg-sidebar">

                                <div class="panel panel-default">
                   <div class="tg-widgettitle">
                                        <h3>Notice Board</h3>
                                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="demo2">
                                     @if(!empty($news) &&  $news->count())
                                             @foreach ($news as  $link)
                                    <li class="news-item">{{$link->title}} <a href="/news/{{$link-> title}}">Read more...</a></li>

                                     @endforeach 

                                    @else
            There is no data.
        @endif 
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer"> </div>
                </div>
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-widgetcontent">
                                        <h3>Admission Form 2017</h3>
                                        <div class="tg-description">
                                            <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
                                        </div>
                                        <a class="tg-btn tg-btnicon" href="{{ asset('download/Receipt.pdf') }}">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <span>Download PDF</span>
                                        </a>
                                    </div>
                                </div>

                            <!--    <div class="tg-widget tg-widgetdownload">
                                    <div class="tg-widgettitle">
                                        <h3>Downloads</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-paperclip"></i>
                                                    <span>Prospectus</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-map-signs"></i>
                                                    <span>Admission Guide</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-list-ul"></i>
                                                    <span>Merit List 2017</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-calendar-check-o "></i>
                                                    <span>Examination Date Sheet</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-bookmark-o"></i>
                                                    <span>Examination Guide 2017</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetcampuses">
                                    <div class="tg-widgettitle">
                                        <h3>Campuses</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <div id="tg-campusslider" class="tg-campusslider owl-carousel tg-campuses">
                                            <div class="item">
                                                <div class="tg-campus">
                                                    <div class="tg-themepost">
                                                        <figure class="tg-othercampusimg">
                                                            <img src="images/campuses/img-04.jpg" alt="image description">
                                                        </figure>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <i class="icon-location"></i>
                                                            <address>Abc, xyz street London, HG521A</address>
                                                        </li>
                                                        <li>
                                                            <i class="icon-phone-handset"></i>
                                                            <span>0800 - 1234 - 562 - 6</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon-printer"></i>
                                                            <span>+4 1234 567 - 9</span>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:query@domain.com">
                                                                <i class="icon-envelope"></i>
                                                                <span>query@domain.com</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:complaint@domain.com">
                                                                <i class="icon-construction"></i>
                                                                <span>complaint@domain.com</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="tg-campus">
                                                    <div class="tg-themepost">
                                                        <figure class="tg-othercampusimg">
                                                            <img src="images/campuses/img-05.jpg" alt="image description">
                                                        </figure>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <i class="icon-location"></i>
                                                            <address>Abc, xyz street London, HG521A</address>
                                                        </li>
                                                        <li>
                                                            <i class="icon-phone-handset"></i>
                                                            <span>0800 - 1234 - 562 - 6</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon-printer"></i>
                                                            <span>+4 1234 567 - 9</span>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:query@domain.com">
                                                                <i class="icon-envelope"></i>
                                                                <span>query@domain.com</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:complaint@domain.com">
                                                                <i class="icon-construction"></i>
                                                                <span>complaint@domain.com</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="tg-campus">
                                                    <div class="tg-themepost">
                                                        <figure class="tg-othercampusimg">
                                                            <img src="images/campuses/img-06.jpg" alt="image description">
                                                        </figure>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <i class="icon-location"></i>
                                                            <address>Abc, xyz street London, HG521A</address>
                                                        </li>
                                                        <li>
                                                            <i class="icon-phone-handset"></i>
                                                            <span>0800 - 1234 - 562 - 6</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon-printer"></i>
                                                            <span>+4 1234 567 - 9</span>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:query@domain.com">
                                                                <i class="icon-envelope"></i>
                                                                <span>query@domain.com</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:complaint@domain.com">
                                                                <i class="icon-construction"></i>
                                                                <span>complaint@domain.com</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--************************************
                Main End
        *************************************-->
        <!--************************************


@endsection

      