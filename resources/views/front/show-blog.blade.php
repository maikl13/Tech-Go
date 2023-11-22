@extends('front.layouts.app')
@section('header')
    @include('front.layouts.parts.header-page')
    </div>
@endsection
@section('content') 
    <!-- ======== Start main ======= -->
    <main>
      <!-- =============== Start Section Blog ============== -->
      <div class="blog" style="padding:50px 0 50px 0">
        <!-- ==== Start Container ===== -->
        <div class="container">
          <!-- ===== Start main Blog ===== -->
          <div class="mainBlog">
            <!-- ==== Start Right Blog ==== -->
            <div class="rightBlog">
              <!-- ===== Start all Blog ===== -->
              <div class="allBlog">

           
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
                    {!!strip_tags($p['content_' . app()->getLocale()])!!}
                    </p>
                  </div>
                  <!-- ===== End content ===== -->
                    </a>
                </div>
                <!-- ===== End Blog One ===== -->
             

                
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