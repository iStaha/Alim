@extends('base.outer')

@section('content')

        
       <!--************************************
            Header End

        <!--************************************
                Inner Banner Start
        *************************************-->
        <div class="tg-innerbanner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ol class="tg-breadcrumb">
                            <li><a href="javascript:void(0);">home</a></li>
                            <li><a href="javascript:void(0);">courses</a></li>
                            <li class="tg-active">Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Inner Banner End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns">
                        <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12 ">
                            <div id="tg-content" class="tg-content">
                                <div class="tg-detailpage tg-coursedetailpage">
                                    <article class="tg-themepost tg-course">
                                        <div class="tg-themepostcontent">
                                            <ul class="tg-themeposttags">
                                                <li><a href="javascript:void(0);">Management</a></li>
                                                <li><a href="javascript:void(0);">Science</a></li>
                                            </ul>
                                            <div class="tg-themeposttitle">
                                                <h1> 
                                                      @if(!empty($cours) && $cours->count())
                                                {{$cours->title}} 
                                                      @endif
                                                </h1>
                                            </div>
                                            <ul class="tg-themepostinfo">
                                                <li>
                                                    <figure>
                                                        <a href="javascript:void(0);"><img src="{{ asset('images/authors/img-01.jpg') }}" alt="image description"></a>
                                                    </figure>
                                                    <div class="tg-infodata">
                                                        <span>Tutor:</span>
                                                        <strong><a href="javascript:void(0);">Antione Wattley</a></strong>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tg-infodata">
                                                        <span>Capacity:</span>
                                                        <strong><a href="javascript:void(0);"> @if(!empty($cours) && $cours->count())
                                                {{$cours->vacancy}} 
                                                      @endif Members Joined</a></strong>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <span class="tg-pricebox">
                                                <span>@if(!empty($cours) && $cours->count())
                                                ${{$cours->fee}} 
                                                      @endif</span>
                                            <span>per month</span>
                                            <a class="tg-btn" href="javascript:void(0);">join now</a>
                                            </span>
                                        </div>
                                        <div class="tg-coursegallery">
                                            <div id="tg-coursegalleryslider" class="tg-coursegalleryslider owl-carousel">
                                                <figure class="item"><img src="{{ asset('images/courses/img-21.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-21.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-21.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-21.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-21.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-21.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-21.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-21.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-21.jpg') }}" alt="image description"></figure>
                                            </div>
                                            <div id="tg-coursegallerynav" class="tg-coursegallerynav owl-carousel">
                                                <figure class="item"><img src="{{ asset('images/courses/img-22.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-23.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-24.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-25.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-26.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-27.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-28.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-29.jpg') }}" alt="image description"></figure>
                                                <figure class="item"><img src="{{ asset('images/courses/img-30.jpg') }}" alt="image description"></figure>
                                            </div>
                                        </div>
                                        <div class="tg-themetabs tg-coursestabs">
                                            <ul class="tg-themetabnav" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#description" role="tab" data-toggle="tab">Description</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#curriculum" role="tab" data-toggle="tab">Curriculum</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#tutors" role="tab" data-toggle="tab">Tutors</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#relateddocuments" role="tab" data-toggle="tab">Related Documents</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content tg-themetabcontent">
                                                <div role="tabpanel" class="tab-pane active" id="description">
                                                    <div class="tg-courseinfo">
                                                        <div class="tg-schedule">
                                                            <span class="tg-scheduleicon"><i class="icon-clock"></i></span>
                                                            <time datetime="2016-02-02" class="tg-timedate">Wed, November 9, 2016 <span>1:00PM - 3:00PM</span></time>
                                                        </div>
                                                        <ul class="tg-coursecompunent">
                                                            <li>
                                                                <span>
                                                                    <i class="icon-select"></i>
                                                                    <i>Course Code:</i>
                                                                </span>
                                                                <span>fhg52470</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="icon-book"></i>
                                                                    <i>Lectures:</i>
                                                                </span>
                                                                <span>08</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="icon-clock"></i>
                                                                    <i>Duration:</i>
                                                                </span>
                                                                <span>02 Hrs</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="icon-dice"></i>
                                                                    <i>Quizzes:</i>
                                                                </span>
                                                                <span>04</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="icon-bookmark"></i>
                                                                    <i>Skill Level:</i>
                                                                </span>
                                                                <span>All</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="icon-bullhorn"></i>
                                                                    <i>Languages:</i>
                                                                </span>
                                                                <span>English</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="icon-user"></i>
                                                                    <i>Students:</i>
                                                                </span>
                                                                <span>1205</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="icon-chart-bars"></i>
                                                                    <i>Assessments:</i>
                                                                </span>
                                                                <span>Self</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <i class="icon-calendar-full"></i>
                                                                    <i>Class Days:</i>
                                                                </span>
                                                                <span>Mo, We, Fr</span>
                                                            </li>
                                                        </ul>
                                                        <div class="tg-btnsbox">
                                                            <a class="tg-btn" href="javascript:void(0);">Join Now</a>
                                                        </div>
                                                    </div>
                                                    <h3>Description</h3>
                                                    <p>@if(!empty($cours) && $cours->count())
                                                {{$cours->description}} 
                                                      @endif</p>
                                                   
                                                    <h3>Bullet Points</h3>
                                                  @if(!empty($cours) && $cours->count())
                                                {!!$cours->bullets!!} 
                                                      @endif
                                                   
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="curriculum">
                                                    <h3>Certification</h3>
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore msagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaasmco laboris nisi uiat aliquip ex ea commodo consequat.</p>
                                                    <ul class="tg-courseoutline">
                                                        <li>
                                                            <span>
                                                                <i class="icon-music-note"></i>
                                                                <i>Lecture 1.1:</i>
                                                            </span>
                                                            <span>30 min</span>
                                                            <div class="tg-description">
                                                                <p>Introduction</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-camera-video"></i>
                                                                <i>Lecture 1.2:</i>
                                                            </span>
                                                            <span>25 min</span>
                                                            <div class="tg-description">
                                                                <p>Consectetur Adipisicing Elitsed</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-music-note"></i>
                                                                <i>Lecture 1.3:</i>
                                                            </span>
                                                            <span>10 min</span>
                                                            <div class="tg-description">
                                                                <p>Eiusmod Tempor Incididunt ut Labore Dolore</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-camera-video"></i>
                                                                <i>Lecture 1.4:</i>
                                                            </span>
                                                            <span>30 min</span>
                                                            <div class="tg-description">
                                                                <p>Magna Aliqua Enim ad Minim Veniam Quis Nostrud</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-camera-video"></i>
                                                                <i>Lecture 1.5:</i>
                                                            </span>
                                                            <span>35 min</span>
                                                            <div class="tg-description">
                                                                <p>Exercitation Ullamco Laboris Nisi ut Aliquip Commodo</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-music-note"></i>
                                                                <i>Lecture 1.6:</i>
                                                            </span>
                                                            <span>20 min</span>
                                                            <div class="tg-description">
                                                                <p>Consequat Duis Aute Irure Dolor Reprehenderit</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-camera-video"></i>
                                                                <i>Lecture 1.7:</i>
                                                            </span>
                                                            <span>30 min</span>
                                                            <div class="tg-description">
                                                                <p>Velit Esse Cillum Dolore eu Fugiat</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-music-note"></i>
                                                                <i>Lecture 1.8:</i>
                                                            </span>
                                                            <span>25 min</span>
                                                            <div class="tg-description">
                                                                <p>Nulla Pariatur Excepteur</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-pie-chart"></i>
                                                                <i>Lecture 1.9:</i>
                                                            </span>
                                                            <span>06 questions</span>
                                                            <div class="tg-description">
                                                                <p>Occaecat Cupidatat Proident</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="tutors">
                                                    <ul class="tg-tutors">
                                                        <li>
                                                            <div class="tg-boxleft">
                                                                <figure>
                                                                    <a href="javascript:void(0);"><img src="{{ asset('images/tutors/img-01.jpg') }}" height="100" width="100" alt="image description"></a>
                                                                </figure>
                                                                <div class="tg-tutornamedesignation">
                                                                    <strong>Maragaret Ellinger</strong>
                                                                    <span>Professor</span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="tg-description">
                                                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore msagna aliqua. Ut enim ad minim veniam quistan nostrud exercitation ullaasmco laboris nisi uiat aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit etssse cillum dolore eu fugiat nulla pariatur sintasr occaecat cupidatat proident.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-boxleft">
                                                                <figure>
                                                                    <a href="javascript:void(0);"><img src="{{ asset('images/tutors/img-02.jpg') }}" height="100" width="100" alt="image description"></a>
                                                                </figure>
                                                                <div class="tg-tutornamedesignation">
                                                                    <strong>Alphonse Travis</strong>
                                                                    <span>Assistant Professor</span>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="tg-description">
                                                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore msagna aliqua. Ut enim ad minim veniam quistan nostrud exercitation ullaasmco laboris nisi uiat aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit etssse cillum dolore eu fugiat nulla pariatur sintasr occaecat cupidatat proident.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-boxleft">
                                                                <figure>
                                                                    <a href="javascript:void(0);"><img src="{{ asset('images/tutors/img-03.jpg') }}" height="100" width="100" alt="image description"></a>
                                                                </figure>
                                                                <div class="tg-tutornamedesignation">
                                                                    <strong>Bernardina Verde</strong>
                                                                    <span>Lecturer</span>
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="tg-description">
                                                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore msagna aliqua. Ut enim ad minim veniam quistan nostrud exercitation ullaasmco laboris nisi uiat aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit etssse cillum dolore eu fugiat nulla pariatur sintasr occaecat cupidatat proident.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="relateddocuments">
                                                    <ul class="tg-relateddocuments">
                                                        <li>
                                                            <span class="tg-documenticon"><i class="fa fa-file-pdf-o"></i></span>
                                                            <a class="tg-btndownload" href="javascript:void(0);"><i class="icon-download"></i></a>
                                                            <div class="tg-documentnamesize">
                                                                <strong>Acrobat_File_Title_Here.pdf</strong>
                                                                <span>2.7 MB</span>
                                                            </div>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                  <!--   <div class="tg-relatedthemeposts">
                                        <div class="tg-borderheading">
                                            <h2>Related Courses</h2>
                                        </div>
                                        <div id="tg-latestnewsslider" class="tg-latestnewsslider owl-carousel tg-posts">
                                            <div class="item">
                                                <article class="tg-themepost tg-course">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/courses/img-04.jpg" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-themeposttags">
                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="/details">Take a Step &amp; Become a Proffesional Teacher</a></h3>
                                                        </div>
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>1205</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="tg-themepost tg-course">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/courses/img-05.jpg" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-themeposttags">
                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="/details">One Day Crash Course on Skills Improvement</a></h3>
                                                        </div>
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>1205</span>
                                                                </a>
                                                            </li>
                                                           
                                                        </ul>
                                                        <span class="tg-pricebox"><a href="javascript:void(0);">free</a></span>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="tg-themepost tg-course">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/courses/img-06.jpg" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-themeposttags">
                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="/details">An Apple A Day Keeps The Teacher Away</a></h3>
                                                        </div>
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>1205</span>
                                                                </a>
                                                            </li>
                                                           
                                                        </ul>
                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$23/pm</a></span>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="tg-themepost tg-course">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/courses/img-07.jpg" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-themeposttags">
                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="/details">Degree In Hand And A Job In Your Pocket</a></h3>
                                                        </div>
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>1205</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                        <span class="tg-pricebox"><a href="javascript:void(0);">free</a></span>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="tg-themepost tg-course">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/courses/img-08.jpg" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-themeposttags">
                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="/details">Ending? This Is Only The Beginning Ending This Is Only The</a></h3>
                                                        </div>
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>1205</span>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$40/pm</a></span>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="tg-themepost tg-course">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/courses/img-09.jpg" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-themeposttags">
                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="/details">I Use To Be Little, But Now I'm Going To School</a></h3>
                                                        </div>
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>1205</span>
                                                                </a>
                                                            </li>
                                                           
                                                        </ul>
                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$21/pm</a></span>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <!--************************************
                Main End
        *************************************-->


@endsection

      