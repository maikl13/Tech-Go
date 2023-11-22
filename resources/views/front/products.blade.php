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
              {{__('lang.our_products')}}
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
      <!-- ======= Start Products ===== -->
      <div class="portfolio__Projects products-grid products-single-grid" id="Partner">

        
        <!-- ===== Start Container ===== -->
        <div class="container">
          <!-- ====== End section title ===== -->
          <!-- ====== start all protfolio project ====== -->
          <div class="all__portfolio__Projects popup-gallery">
            @foreach($products as $item)
              <!-- Start port One -->
              @include('front.layouts.parts.product')
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
