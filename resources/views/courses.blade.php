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
                            <li class="tg-active">Grid</li>
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
                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-12">
                            <div id="tg-content" class="tg-content">
                                <div class="tg-resultandstyle">
                                    <span class="tg-searchresult">Showing 1-2 of 60 results</span>
                                    <!--<ul class="tg-poststyleswitcher">
                                        <li class="tg-active"><a href="coursesgrid.html"><i class="fa fa-th"></i></a></li>
                                        <li><a href="courseslist.html"><i class="fa fa-th-list"></i></a></li>
                                    </ul>-->
                                </div>
                                <div class="tg-courses tg-grid">
                                    <div class="row">
                                         @if(!empty($course) && $course->count())

                                              @foreach ($course as  $links)
                                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                            <article class="tg-themepost tg-course">
                                                <figure class="tg-featuredimg">
                                                    <a href="javascript:void(0);">
                                                        <img src="images/courses/img-04.jpg" alt="image description">
                                                    </a>
                                                </figure>
                                                <div class="tg-themepostcontent">
                                                    <ul class="tg-themeposttags">
                                                        <li><a href="javascript:void(0);">{{ $links->category}}</a></li>
                                                       
                                                    </ul>
                                                    <div class="tg-themeposttitle">
                                                        <h3><a href="javascript:void(0);">{{ $links->title}}</a></h3>
                                                    </div>
                                                    <ul class="tg-matadata">
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-user"></i>
                                                                <span>{{ $links->vacancy}}</span>
                                                            </a>
                                                        </li>
                                                        
                                                    </ul>
                                                    <span class="tg-pricebox"><a href="javascript:void(0);">${{ $links->fee}}/pm</a></span>
                                                </div>
                                            </article>
                                        </div>

                                         @endforeach 
                                   

                                    @else
           There is no data.
        @endif
                                       
                                        </div>
                                    </div>
                                </div>
                                <nav class="tg-pagination">
                                    <ul>
                                        <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="tg-active"><a href="#">5</a></li>
                                        <li>...</li>
                                        <li><a href="#">10</a></li>
                                        <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
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