@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل اراء عملاء</h3>
                    </div>
                    <form method="POST" action="/admin/videos/update"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$video->id}}" />
                        <div class="row">
                        <div class="col-12">
                                <label>الصورة المصغرة</label>
                                <input type="file" name="image" class="form-control" 
                                       >
                                <img src="/storage/images/{{$video->image}}" style="width:120px" />
                            </div>
                            <div class="col-12">
                                <label>الفيديو</label>
                                <input type="file" name="video" class="form-control" 
                                       >
                                @if($video->source)
                                <br/>
                                    <video width="auto" height="150" controls>
                                        <source src="/storage/videos/{{$video->source}}" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <br/>
                                @endif                                       
                            </div>


                            <br/>

  

                        </div>
                        <button class="btn btn-primary col-12" type="submit" style="margin-top: 10px"><i
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