
           <div class="portOne mix" data-aos="fade-left">
              <!-- Start main Port One -->
              <div class="mainPortOne">
                <!-- start img Port -->
                <div class="imgPortFolio">
                  <img
                    src="{{url('/')}}/uploads/images/{{$item->image}}"
                    alt="imgPortFolio"
                  />
                </div>
                <!-- End img Port -->
                <!-- === Start Icon Demo === -->
                <div class="iconDemo">
                  <!-- ==== Start Content ==== -->
                  <div class="content">
                   
                    <p class="text">{{$item['title_' . app()->getLocale()]}}</p>
                    <div class="mainIcons">
                      <!-- start icon One -->
                      <a href="{{url('/' . app()->getLocale())}}/products/{{$item->id}}/show" class="iconOne iconLink">
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
                        <a href="{{url('/' . app()->getLocale())}}#contact">{{__('lang.buy_product')}}</a>
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