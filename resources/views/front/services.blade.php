
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
                {{__('lang.services')}}
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
      <!-- ======= Start section Portfolie Projects ===== -->
      <div class="Services-grid" id="Services">
        <!-- ====== Start Shape01 ===== -->
        <div class="shape01 shape">
          <img src="{{url('/')}}/front/assets/images/shape/01.svg" alt="shape" />
        </div>
        <!-- ====== End Shape01 ===== -->

        <!-- ====== Start Shape01 ===== -->
        <div class="shape002 shape">
          <img src="{{url('/')}}/front/assets/images/shape/01.svg" alt="shape" />
        </div>
        <!-- ====== End Shape01 ===== -->
        <!-- ===== Start Container ===== -->
        <div class="container">
            <div class="row">

            @foreach($services as $item)
                <div class="col-lg-4">
                  @include('front.layouts.parts.service')
                </div>
            @endforeach

            </div>
        </div>
        <!-- ===== End Container ===== -->
      </div>
      <!-- ======= End section Portfolie Projects ===== -->
    </main>
    <!-- ======== End main ======= -->

@endsection