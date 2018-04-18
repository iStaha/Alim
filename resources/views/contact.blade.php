@extends('base.outer')

@section('content')

        
        <!--************************************
        Header End
        *************************************-->

        <!--************************************
                Main Start                      
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-contactus tg-contactusvtwo">
                            <div class="tg-titleborder">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div id="tg-officelocation" class="tg-officelocation"></div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                     @foreach($errors->all() as $error)
                              <div class="alert error">
                                <i class="fa fa-lg  fa-times-circle"></i> {{ $error }}
                              </div>         
                                    @endforeach
                                    <form class="tg-formtheme tg-formcontactus" action="/contact" method="post">
                                        {{csrf_field()}}
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" placeholder="Name*">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" placeholder="Email* (Your email address will not be published.)">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Comment" name="message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <button class="tg-btn" type="submit">submit</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
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
        <!--************************************-->


@endsection

      