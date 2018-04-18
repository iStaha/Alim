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
                            <li><a href="javascript:void(0);">news</a></li>
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
                                <div class="tg-detailpage tg-newsdetailpage">
                                    <article class="tg-themepost tg-newspost">
                                        <div class="tg-themepostcontent">
                                            <ul class="tg-themeposttags">
                                                <li><a href="javascript:void(0);">Management</a></li>
                                                <li><a href="javascript:void(0);">Science</a></li>
                                            </ul>
                                            <div class="tg-themeposttitle">
                                                <h1>Allotment of Hostel Accommodation 2017!</h1>
                                            </div>
                                            <ul class="tg-themepostinfo">
                                                <li>
                                                    <figure><a href="javascript:void(0);"><img src="{{ asset('images/authors/img-01.jpg') }}" alt="image description"></a></figure>
                                                    <div class="tg-infodata">
                                                        <span>Author:</span>
                                                        <strong><a href="javascript:void(0);">{{$news->author}}</a></strong>
                                                    </div>
                                                </li>
                                          
                                                
                                            </ul>
                                        </div>
                                        <figure class="tg-featuredimg"><img src="{{ asset("images/themepost/$news->image") }}" width="100%" alt="image description"></figure>
                                        {!! $news->descrip!!}
                                    </article>
                               <!--      <div class="tg-tagsandpsotshares">
                                        <div class="tg-tagstext">
                                            <span>tags:</span>
                                            <div class="tg-tags">
                                                <a class="tg-tag" href="javascript:void(0);">Student</a>
                                                <a class="tg-tag" href="javascript:void(0);">Examination</a>
                                                <a class="tg-tag" href="javascript:void(0);">Easy Learning</a>
                                                <a class="tg-tag" href="javascript:void(0);">Pencils</a>
                                                <a class="tg-tag" href="javascript:void(0);">Technology</a>
                                                <a class="tg-tag" href="javascript:void(0);">Video</a>
                                                <a class="tg-tag" href="javascript:void(0);">Teachers</a>
                                                <a class="tg-tag" href="javascript:void(0);">Amazing Trips</a>
                                                <a class="tg-tag" href="javascript:void(0);">News</a>
                                                <a class="tg-tag" href="javascript:void(0);">Bully Kids</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                            
                                    <div class="tg-postauthor">
                                        <figure><a href="javascript:void(0);"><img src="images/img-18.jpg" alt="image description"></a></figure>
                                        <div class="tg-postauthorcontent">
                                            <div class="tg-postauthorhead">
                                                <h4><a href="javascript:void(0);">Maragaret Ellinger</a></h4>
                                                <span>Author Since: June 27, 2015</span>
                                                <ul class="tg-socialicons">
                                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                                    <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                                    <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-description">
                                                <p>Consequat duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nullataka pariatur occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis undes omnis iste natus error sit quae ab illo inventore irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat ananulla pariatur occaecat cupidatat non dolore eu fugiat nullataka pariatur.</p>
                                            </div>
                                        </div>
                                    </div>
                          -->
                                
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

      