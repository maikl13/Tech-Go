      <!-- ====== Start nav menu ======== -->

      <div class="menu">
        <!-- ====== Start container ====== -->

        <div class="container">

          <!-- Start All menu -->

          <div class="allMenu flex-between">

            <!-- start Logo -->

            <div class="logo" data-aos="fade-left">

              <a href="{{url('/' . $language_path)}}" class="logoLink">

                <img src="{{url('/')}}/storage/images/{{$global_about->about_logo}}" alt="logo" />

              </a>

            </div>

            <!-- End Logo -->

            <!-- === Start menu Bar R ===== -->

            <div class="menu__Bar">

              <!-- Start menu Links R -->

              <nav class="menuLinks" data-aos="fade-down">

                <div class="iconClose"><i class="fa-solid fa-close"></i></div>

                <!-- start Logo R -->

                <div class="logo logoMenu" data-aos="fade-left">

                  <a href="{{url('/' . $language_path)}}"" class="logoLink">

                    <img src="{{url('/')}}/storage/images/{{$global_about->about_logo}}" alt="logo" />

                  </a>



                </div>

                <!-- End Logo R -->

                <!-- ==== Start list menu R ===== -->

                <ul class="list__Menu align-center">

                  <li class="nav__Item">

                    <a href="{{url('/' . $language_path)}}"" class="nav__Link">{{__('lang.home')}}</a>

                  </li>

                  <li class="nav__Item">

                    <a href="{{url('/' . $language_path)}}#Services" class="nav__Link">{{__('lang.services')}}</a>

                  </li>

                  <li class="nav__Item">

                    <a href="{{url('/' . $language_path)}}#About" class="nav__Link">{{__('lang.about_us')}}</a>

                  </li>

                  <li class="nav__Item">

                    <a href="{{url('/' . $language_path)}}#Partner" class="nav__Link">{{__('lang.our_partners')}}</a>

                  </li>

                  <li class="nav__Item">

                    <a href="{{url('/' . app()->getLocale())}}/team" class="nav__Link">{{__('lang.team')}}</a>

                  </li>

                  <li class="nav__Item">

                    <a href="{{url('/' . app()->getLocale())}}/blog" class="nav__Link">{{__('lang.blog')}}</a>

                  </li>

                </ul>

                <!-- ==== End list menu R ===== -->

              </nav>

              <!-- End menu Links -->

            </div>

            <!-- === End menu Bar ===== -->



            <!-- ===== Start All left Header ==== -->

            <div class="left__Header flex-center" data-aos="fade-right">

              <!-- ==== Start Languge ===== -->

              <div class="languge">

                <div class="lang langAr">

                  <a @if(app()->getLocale() == "ar") href="{{url('/')}}/en" @else href="{{url('/')}}"  @endif class="align-center LinkLang">

                    <span class="text">

                      @if(app()->getLocale() == "ar")

                        العربية

                      @else

                        EN

                      @endif

                    </span>

                    @if(app()->getLocale() == "en")

                    <img style="width:25px" src="{{url('/')}}/front/assets/images/lang/en.png" alt="ArabicLang" />

                    @else

                    <img  src="{{url('/')}}/front/assets/images/lang/ar.png" alt="ArabicLang" />

                    @endif

                  </a>



                </div>



              </div>

              @php
                $dark_mode = $settings->where('key','darkmode_enabled')->first()->value;
                if($dark_mode == "true") {
              @endphp
              <a href="{{url('/' . app()->getLocale())}}/theme" id='mode-btn'><i class="fas fa-moon"></i></a>
              @php } @endphp


              <!-- ==== End Languge ===== -->

              <div class="toggle"><i class="fa-solid fa-bars"></i></div>

            </div>

            <!-- ====== End all Left Header ====== -->

          </div>

          <!-- End All Menu -->

        </div>

        <!-- ====== End container ====== -->

      </div>