@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body about-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">بانر الرئيسية</h3>
                    </div>
                    <form method="POST" action="/admin/about/update"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$about->id}}" />
                        <div class="row">
                            <div class="col-6">
                                <label>عنوان عربي</label>
                                <input type="text" name="banner_title_ar" class="form-control"  
                                    value="{{$about->banner_title_ar}}">
                            </div>
                            <div class="col-6">
                                <label>عنوان انجليزي</label>
                                <input type="text" name="banner_title_en" class="form-control"  
                                    value="{{$about->banner_title_en}}">
                            </div>
                            <div class="col-6">
                                <label>وصف عربي</label>
                                <textarea style="height:200px !important" name="banner_description_ar" class="form-control">{{$about->banner_description_ar}}</textarea>
                            </div>
                            <div class="col-6">
                                <label>وصف انجليزي</label>
                                <textarea style="height:200px !important;direction:ltr" name="banner_description_en" class="form-control">{{$about->banner_description_en}}</textarea>
                            </div>
                            <div class="col-6">
                                <label>هدفنا عربي</label>
                                <textarea style="height:200px !important" name="our_goal_ar" class="form-control">{{$about->our_goal_ar}}</textarea>
                            </div>
                            <div class="col-6">
                                <label>هدفنا انجليزي</label>
                                <textarea style="height:200px !important;direction:ltr" name="our_goal_en" class="form-control">{{$about->our_goal_en}}</textarea>
                            </div>
                            <div class="col-6">
                                <label>صورة عربي: </label>
                                <img src="/storage/images/{{$about->banner_image}}" style="width:150px;display:block" />
                                <input type="file" name="image" class="form-control"
                                       accept="image/*" >
                            </div>

                            <div class="col-6">
                                <label>صورة انجليزي: </label>
                                <img src="/storage/images/{{$about->banner_image_en}}" style="width:150px;display:block" />
                                <input type="file" name="image_en" class="form-control"
                                       accept="image/*" >
                            </div>

                        </div>
                        <button class="btn btn-primary col-12" type="submit" style="margin-top: 10px"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>
                            حفظ
                        </button>
                    </form>
                </div>
            </div>
        </div>        
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body about-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">من نحن</h3>
                    </div>
                    <form method="POST" action="/admin/about/update"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$about->id}}" />
                        <div class="row">

                            <div class="col-6">
                                <label>اسم الموقع عربي</label>
                                <input type="text" name="website_title_ar" class="form-control"  
                                    value="{{$about->website_title_ar}}">
                            </div>
                            <div class="col-6">
                                <label>اسم الموقع انجليزي</label>
                                <input type="text" name="website_title_en" class="form-control"  
                                    value="{{$about->website_title_en}}">
                            </div>

                        
                            <div class="col-6">
                                <label>عنوان عربي</label>
                                <input type="text" name="about_title_ar" class="form-control"  
                                    value="{{$about->about_title_ar}}">
                            </div>
                            <div class="col-6">
                                <label>عنوان انجليزي</label>
                                <input type="text" name="about_title_en" class="form-control"  
                                    value="{{$about->about_title_en}}">
                            </div>


                            <div class="col-6">
                                <label>وصف عربي</label>
                                <textarea style="height:190px !important" name="about_description_ar" class="form-control">{{$about->about_description_ar}}</textarea>
                            </div>

                            <div class="col-6">
                                <label>وصف انجليزي</label>
                                <textarea style="height:190px !important;direction:ltr" name="about_description_en" class="form-control">{{$about->about_description_en}}</textarea>
                            </div>

                            <div class="col-12">
                                <label>شعار الموقع </label>
                                <img src="/storage/images/{{$about->about_logo}}" style="width:150px;display:block;background:black" />
                                <input type="file" name="logo" class="form-control"
                                       >
                            </div>

                            <div class="col-6">
                                <label>فيديو عربي</label>
                                <input type="file" name="video" class="form-control"
                                       accept="video/*" >
                                @if($about->about_video)
                                <br/>
                                    <video width="auto" height="150" controls>
                                        <source src="/storage/videos/{{$about->about_video}}" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <br/>
                                @endif
                            </div>

                            <div class="col-6">
                                <label>فيديو انجليزي</label>
                                <input type="file" name="video_en" class="form-control"
                                       accept="video/*" >
                                @if($about->about_video_en)
                                <br/>
                                    <video width="auto" height="150" controls>
                                        <source src="/storage/videos/{{$about->about_video_en}}" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <br/>
                                @endif
                            </div>


                            <div class="col-3">
                                <label>سنوات الخبرة</label>
                                <input type="number" name="about_experience_years" class="form-control"  
                                    value="{{$about->about_experience_years}}">
                            </div>

                            <div class="col-3">
                                <label>عدد تطبيقات الهاتف</label>
                                <input type="number" name="about_apps_count" class="form-control"  
                                    value="{{$about->about_apps_count}}">
                            </div>

                            <div class="col-3">
                                <label>عدد مواقع الويب</label>
                                <input type="number" name="about_websites_count" class="form-control"  
                                    value="{{$about->about_websites_count}}">
                            </div>

                            <div class="col-3">
                                <label>عدد العملاء</label>
                                <input type="number" name="about_clients_count" class="form-control"  
                                    value="{{$about->about_clients_count}}">
                            </div>


       

                        </div>
                        <button class="btn btn-primary col-12" type="submit" style="margin-top: 35px"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>
                            حفظ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    {{--<script>--}}


    {{--function readURL(input) {--}}
    {{--if (input.files && input.files[0]) {--}}
    {{--var reader = new FileReader();--}}

    {{--reader.onload = function (e) {--}}
    {{--$('#blah')--}}
    {{--.attr('src', e.target.result)--}}
    {{--.width(100)--}}
    {{--.height(100);--}}
    {{--};--}}

    {{--reader.readAsDataURL(input.files[0]);--}}
    {{--}--}}
    {{--}--}}
    {{--</script>--}}
@endsection