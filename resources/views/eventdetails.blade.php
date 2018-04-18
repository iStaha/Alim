@extends('base.outer')

@section('content')

        
        <!--************************************
                    Header End
        *************************************-->
        
        <!--************************************
                Inner Banner Start
        *************************************-->
        <div class="tg-innerbanner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ol class="tg-breadcrumb">
                            <li><a href="javascript:void(0);">home</a></li>
                            <li><a href="javascript:void(0);">event</a></li>
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
                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-12">
                            <div id="tg-content" class="tg-content">
                                <div class="tg-detailpage tg-eventdetailpage">
                                    <article class="tg-themepost tg-eventpost">
                                        <div class="tg-themepostcontent">
                                            <ul class="tg-themeposttags">
                                                <li><a href="javascript:void(0);">Management</a></li>
                                                <li><a href="javascript:void(0);">Science</a></li>
                                            </ul>
                                            <div class="tg-themeposttitle"><h1>One Day Awareness Seminar on Future Focus</h1></div>
                                            <ul class="tg-themepostinfo">
                                                <li>
                                                    <div class="tg-infodata">
                                                        <span>Date:</span>
                                                        <strong><a href="javascript:void(0);">{{$event->date}}</a></strong>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tg-infodata">
                                                        <span>Time:</span>
                                                        <strong><a href="javascript:void(0);">{{$event->time}}</a></strong>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tg-infodata">
                                                        <span>Location:</span>
                                                        <strong><a href="javascript:void(0);">{{$event->location}}</a></strong>
                                                    </div>
                                                </li>
                                            </ul>
                                           <!--  <span class="tg-pricebox">
                                                <span>$36</span>
                                                <span>per month</span>
                                                <a class="tg-btn" href="javascript:void(0);">join now</a>
                                            </span> -->
                                        </div>
                                        <figure class="tg-featuredimg"><img src="{{ asset("images/events/$event->image") }}" alt="image description"></figure>
                                          </div>
                                       
                                       
                                        {!!$event->descrip !!}}
                                    </article>
                               
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

      