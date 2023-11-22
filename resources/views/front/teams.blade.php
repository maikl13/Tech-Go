@extends('front.layouts.app')
@section('header')
    @include('front.layouts.parts.header-page')
      <!-- ====== Start Content Header ==== -->
      <div class="content__Header">
        <!-- start Container -->
        <div class="container">
          <!-- ==== Start All contnet ==== -->
          <div class="all__Content flex-between">
            <!-- ==== Start Content Info === -->
            <div class="content__Info" data-aos="fade-left">
              <h1 class="titleInfo infoTitleProject">
                {{__('lang.team')}}
              </h1>
             
            </div>
            <!-- ==== End Content Info ===== -->
            <!-- ==== Start Image Content ===== -->
            <div class="image__Content imgProject" data-aos="fade-down">
              <img src="{{url('/')}}/front/assets/images/main/01.webp" alt="image" />
            </div>
            <!-- ==== End Image Content ====== -->
          </div>
          <!-- ==== End All Content ==== -->
        </div>
        <!-- End Container -->
      </div>
      <!-- ===== End Content Header ====== -->
    </div>
@endsection
@section('content') 
    <!-- ======== Start main ======= -->
    <main>
        <!-- Start Team Area  -->
        <div class="eduvibe-about-one-team edu-team-area edu-section-gap team-area-shape-position bg-image bg-image--8 paralax-area">
            <div class="wrapper">
                <div class="container eduvibe-animated-shape">

                    <div class="row row--20">
                      @foreach($team as $t)
                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1 edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="#!">
                                                <img src="/uploads/teams/{{$t->image}}" alt="team images">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-instructor-info">
                                    <h5 class="title"><a href="#!">{{$t['title_' . app()->getLocale()]}}</a></h5>
                                    <span class="desc">{{$t->cat['title_' . app()->getLocale()]}}</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->
                      @endforeach

                    </div>

                </div>

            </div>
        </div>
        <!-- End Team Area  -->
    </main>
    <!-- ======== End main ======= -->
@endsection
