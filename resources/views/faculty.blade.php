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
                            <li class="tg-active">faculties</li>
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
                                <div class="tg-faculties">
                                    <div class="tg-heading">
                                        <h2>Faculties at Barnsbury</h2>
                                    </div>

                                        
                             @if(!empty($faculty) &&  $faculty->count())
                                             @foreach ($faculty as  $link)
                                    <div id="tg-facultiescollapse" class="tg-themecollapse tg-facultiescollapse">
                                        <h3 class="fa fa-angle-down">{{ $link->field }}</h3>
                                        <div class="tg-themecollapsecontent">
                                            <div class="row">
                                               

                                                @if(!empty($facul) &&  $facul->count())

                                             @foreach ($facul as  $links)

                                           <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                                    <div class="tg-faculty">
                                                        <figure>
                                                            <a href="javascript:void(0);"><img src="images/speakers/{{$links->img}}" alt="image description"></a>
                                                        </figure>
                                                        <div class="tg-facultyname">
                                                            <h3><a href="/fadet">{{$links->name}}</a></h3>
                                                        </div>
                                                        <span class="tg-facultydesignation">{{$links->designation}}</span>
                                                    </div>
                                                </div>

                                    @endforeach 

                                    @else
            <tr>
                <td colspan="10">There is no data.</td>
            </tr>
        @endif 
                                              
                                               
                                            </div>
                                        </div>
                                       
                                        
                                    </div>  @endforeach   @else
            <tr>
                <td colspan="10">There is no data.</td>
            </tr>
        @endif
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