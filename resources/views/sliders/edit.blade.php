@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل صورة</h3>
                    </div>
                    <form method="POST" action="/admin/sliders/update"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$slide->id}}" />
                        <div class="row">

                        
                            <div class="col-12">
                                <label>صورة :</label>
                                <img src="/storage/images/{{$slide->image}}" style="width:150px;display:block" />
                                <input type="file" name="image" class="form-control"
                                       accept="image/*" >
                            </div>

                            <div class="col-12">
                                <br/>
                                <select  class="form-control" name="type">
                                    <option @if($slide->type == "tablet") selected @endif>tablet</option>
                                    <option @if($slide->type == "mobile") selected @endif>mobile</option>
                                </select>
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