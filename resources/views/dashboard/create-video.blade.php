@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة اراء عملاء</h3>
                    </div>
                    <form method="POST" action="/admin/videos/create"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label>الصورة المصغرة</label>
                                <input type="file" name="image" class="form-control" 
                                       >
                            </div>
                            <div class="col-12">
                                <label>الفيديو</label>
                                <input type="file" name="video" class="form-control" 
                                       >
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