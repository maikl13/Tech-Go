            <div class="servOne" data-aos="flip-left">

              <!-- start Front Card -->

              <div class="front__Card">

                <!-- ====== Start Shape01 ===== -->

  

                <!-- ====== End Shape01 ===== -->

                <!-- ===== start main Serv One ==== -->

                <div class="main__serv__One">

                  <!-- ==== R Start icon ==== -->

                  <div class="icon">

                    <img src="/storage/images/{{$item['icon']}}" />

                  </div>

                  <!-- ==== End icon ==== -->

                  <!-- ==== start info ==== -->

                  <div class="info">

                    <h1 class="title">{{$item['title_' . app()->getLocale()]}}</h1>

                    <p class="text">

                    {!! nl2br($item['content_' . app()->getLocale()]) !!}
                      

                    </p>

                  </div>

                  <!-- ==== End info ==== -->

                </div>

                <!-- ===== End main Serv One R ==== -->

              </div>

              <!-- End Front Card -->

              <!-- start Back Card -->

              <div class="back__Card">

                <!-- Start content Two -->

                <div class="contentTwo">

                  <button class="btn">

                    <a href="{{url('/')}}/whatsapp/contact?url=https://wa.me/{{$settings->where('key','contact_whatsapp')->first()->value}}?text={{$settings->where('key','services_wh_message_' . app()->getLocale())->first()->value}} {{$item['title_' . app()->getLocale()]}}" class="link_arrow">

                      <strong> {{__('lang.request_service')}}</strong>

                      <span>

                        <i class="fa-solid iconFa2 fa-long-arrow-left"></i>

                      </span>

                    </a>

                  </button>

                </div>

                <!-- End content Two -->

              </div>

              <!-- End Back Card -->

            </div>