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

              <h1 class="titleInfo infoTitleProject">{{__('lang.blog')}}</h1>

            </div>

            <!-- ==== End Content Info ===== -->

            <!-- ==== Start Image Content ===== -->

            <div class="image__Content imgProject" data-aos="fade-right">

              <img src="{{url('/')}}/front/assets/images/main/03.webp" alt="image" />

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

      <!-- =============== Start Section Blog ============== -->

      <div class="blog">

        <!-- ==== Start Container ===== -->

        <div class="container">

          <!-- ===== Start main Blog ===== -->

          <div class="mainBlog">

            <!-- ==== Start Right Blog ==== -->

            <div class="rightBlog">

              <!-- ===== Start all Blog ===== -->

              <div class="allBlog">



              @foreach($blog as $p)

                <!-- ===== Start Blog One ===== -->

                <div class="blogOne" data-aos="fade-left">

                  <a href="{{url('/' . app()->getLocale())}}/blog/{{$p->id}}/show">

                  <!-- ==== Start img Blog ==== -->

                  <div class="imgBlog">

                    <img src="/blog_images/{{$p->image}}" alt="blogImg" />

                  </div>

                  <!-- ==== End img Blog ==== -->

                  <!-- ===== Start content ===== -->

                  <div class="content">

                    <!-- ==== Start Info ==== -->

                    <div class="info">

                      <h1 class="title">{{$p['title_' . app()->getLocale()]}}</h1>

                      <div class="date">{{$p->created_at->format('Y-m-d')}}</div>

                    </div>

                    <!-- ==== End Info ==== -->

                    <p class="text">

                    {!!strip_tags(mb_substr($p['content_' . app()->getLocale()],0,500))!!}...

                    </p>

                  </div>

                  <!-- ===== End content ===== -->

                    </a>

                </div>

                <!-- ===== End Blog One ===== -->

              @endforeach



                {{$blog->links()}}

              </div>

              <!-- ===== End all Blog ===== -->

              <!-- ===== Start all Blog ===== -->

            </div>

            <!-- ==== End Right Blog ==== -->

            <!-- ====== Start left Blog ==== -->

            <div class="left__Blog" data-aos="fade-right">

              <div class="title"><h2 class="titleBlog">{{__('lang.more_blogs')}}</h2></div>

              <!-- === Start blogs New ==== -->

              <div class="blogsNew">



              @foreach($random as $p)

                <!-- ==== Start Blog New One ==== -->

                <div class="blogNewOne">

                    <a href="{{url('/' . app()->getLocale())}}/blog/{{$p->id}}/show">

                      <img src="/blog_images/{{$p->image}}" alt="BlogImage" />

                    </a>

                </div>

                <!-- ==== End Blog New One ==== -->

              @endforeach



              </div>

              <!-- === End blogs New ==== -->



              @include('front.layouts.parts.newsletter')

            </div>

            <!-- ====== End left Blog ==== -->

          </div>

          <!-- ===== End main Blog ===== -->



        </div>

        <!-- ==== End Container ===== -->

      </div>

      <!-- =============== End Section Blog ============== -->

    </main>

    <!-- ======== End main ======= -->

@endsection