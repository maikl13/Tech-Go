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
            {{$item['title_' . app()->getLocale()]}}
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
     <div class="project-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="project-details-body">
                        <h2><i class="fa fa-list"></i> {{$item['title_' . app()->getLocale()]}}</h2>
                        <img src="{{url('/')}}/uploads/images/{{$item->image}}"
                         alt="{{$item['title_' . app()->getLocale()]}}"/>
                        <div class="project-actions">
                          @if($item->type == "project")
                            @if($item->website_url)
                            <a target="_blank" href="{{$item->website_url}}"><i class="fa fa-link"></i> {{__('lang.action_website')}}</a>
                            @endif
                            @if($item->google_play_url)
                            <a target="_blank" href="{{$item->google_play_url}}"><i class="fab fa-google-play"></i> {{__('lang.action_google')}}</a>
                            @endif
                            @if($item->app_store_url)
                            <a target="_blank" href="{{$item->app_store_url}}"><i class="fab fa-apple"></i> {{__('lang.action_apple')}}</a>
                            @endif
                          @else
                          <a target="_blank" href="#!"><i class="fa fa-shopping-cart"></i> {{__('lang.buy_product')}}</a>

                          @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-details-body">
                        {!!$item['description_' . app()->getLocale()]!!}
                    </div>
                </div>
            </div>
        </div>
     </div>
    </main>
    <!-- ======== End main ======= -->
@endsection

