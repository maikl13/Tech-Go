@php

if(app()->getLocale() == "ar") {

    $categories = array(

        "website" => "مواقع الويب",

        "app"     => "تطبيقات الهاتف",

        "game"    => "الالعاب"

    );

}else {

    $categories = array(

        "website" => "Websites",

        "app"     => "Apps",

        "game"    => "Games",

    );

}   

@endphp

   <div class="portOne {{$item->category}} mix">

      <!-- Start main Port One -->

      <div class="mainPortOne">

        <!-- start img Port -->

        <div class="imgPortFolio">

          <img

            src="{{url('/')}}/uploads/images/{{$item->image}}"

            alt="{{$item['title_' . app()->getLocale()]}}"

          />

        </div>

        <!-- End img Port -->

        <!-- === Start Icon Demo === -->

        <div class="iconDemo">

          <!-- ==== Start Content ==== -->

          <div class="content">

            <h1 class="title">{{$categories[$item->category]}}</h1>

            <p class="text">{{$item['title_' . app()->getLocale()]}}</p>

            <div class="mainIcons">

              <!-- start icon One -->

              <a href="{{url('/' . app()->getLocale())}}/projects/{{$item->id}}/show" class="iconOne iconLink">

                <i class="fa-solid fa-link"></i>

              </a>

              <!-- End icon One -->

              <!-- start icon One r -->

              <a

                href="{{url('/')}}/uploads/images/{{$item->image}}"

                class="iconOne iconEye mypup-gallery"

              >

                <i class="fa-solid fa-eye"></i>

              </a>

              <!-- End icon One -->

              <!-- start icon One -->

              <button class="btn btnPortfolio">

                <a href="{{url('/')}}/whatsapp/contact?url=https://wa.me/{{$whatsapp}}?text={{$whatsapp_message}} {{url('/ar')}}/projects/{{$item->id}}/show">{{__('lang.order_project')}}</a>

              </button>

              <!-- End icon One -->

            </div>

          </div>

          <!-- ==== End Content ==== -->

        </div>

        <!-- === End Icon Demo === -->

      </div>

      <!-- End main Port One -->

    </div>