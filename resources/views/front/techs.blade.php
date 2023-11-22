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
              <h1 class="titleInfo infoTitleProject">{{__('lang.our_tech')}}</h1>
            </div>
            <!-- ==== End Content Info ===== -->
            <!-- ==== Start Image Content ===== -->
            <div class="image__Content imgProject">
              <img src="{{url('/')}}/front/assets/images/main/02.webp" alt="image" />
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
      <!-- ======= Start Section technology ========= -->
      <div class="technology">
        <!-- ===== Start Container ===== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title" data-aos="fade-right">
            <h1 class="title">{{__('lang.our_tech')}}</h1>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ===== Start all Technology =====  -->
          <div class="all__Technology" data-aos="fade-up">
          @foreach($techs as $item)
            <!-- ===== Start technology one ===== -->
            @include('front.layouts.parts.tech')
            <!-- ===== End technology one ===== -->
          @endforeach
          </div>
          <!-- ===== End all Technology =====  -->
        </div>
        <!-- ===== End Container ===== -->
      </div>
      <!-- ======= End Section technology ========= -->
    </main>
    <!-- ======== End main ======= -->
@endsection
