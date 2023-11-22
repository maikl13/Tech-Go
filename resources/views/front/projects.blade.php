@extends('front.layouts.app')
@section('header')
    @include('front.layouts.parts.header-page')
    <div class="content__Header">
      <!-- start Container -->
      <div class="container">
        <!-- ==== Start All contnet ==== -->
        <div class="all__Content flex-between">
          <!-- ==== Start Content Info === -->
          <div class="content__Info" data-aos="fade-left">
            <h1 class="titleInfo infoTitleProject">
            {{__('lang.explore_our_projects')}}
            </h1>
            <p class="textInfo">{{__('lang.let_us_introduce_our_projects')}}</p>
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
</div>
@endsection
@section('content') 

    <!-- ======== Start main ======= -->
    <main>
      <!-- ======= Start section Portfolie Projects ===== -->
      <div class="portfolio__Projects" id="Partner">

        <!-- ===== Start Container ===== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title">
            <div class="main_title" data-aos="fade-left">
              <h1 class="title">{{__('lang.let_us_introduce_our_projects')}}</h1>
              <p class="text">{{__('lang.explore_our_projects')}}</p>
            </div>
            <ul class="listFilter" data-aos="fade-right">
              <li class="navFilter active" data-filter=".app, .game, .website">
                {{__('lang.filter_all')}}
              </li>
              <li class="navFilter" data-filter=".website">{{__('lang.filter_web')}}</li>
              <li class="navFilter" data-filter=".app">{{__('lang.filter_apps')}}</li>
              <li class="navFilter" data-filter=".game">{{__('lang.filter_games')}}</li>
            </ul>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ====== start all protfolio project ====== -->
          <div class="all__portfolio__Projects popup-gallery">

          @foreach($projects as $item)
            <!-- Start port One -->
            @include('front.layouts.parts.project')
            <!-- end port One -->
          @endforeach


          </div>
          <!-- ====== End all protfolio project ====== -->
        </div>
        <!-- ===== End Container ===== -->
      </div>
      <!-- ======= End section Portfolie Projects ===== -->
    </main>
    <!-- ======== End main ======= -->

@endsection

