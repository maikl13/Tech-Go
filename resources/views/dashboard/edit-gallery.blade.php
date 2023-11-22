@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل تقنية</h3>
                    </div>
                    <form method="POST" action="/admin/gallery/update"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
 
                            <div class="col-12">
                                <label>الصورة</label>
                                <input type="file" name="short_image" class="form-control" 
                                       >
                                       <img src="/storage/images/{{$gallery->short_image}}" style="width:150px;display:block" />

                            </div>
                           

                        <input type="hidden" name="id" value="{{$gallery->id}}" />
                        
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
<script>
    $(".add-image").click(function() {
        var elm = `
            <div class="answer-item row">
                <div class="col-lg-3">
                    <label>الصورة</label>
                    <input type="file" name="images[]" class="form-control"/>
                </div>
                <div class="col-lg-4">
                    <label>وصف الصورة عربي</label>
                    <input type="text" name="descriptions_ar[]" class="form-control"/>
                </div>
                <div class="col-lg-4">
                    <label>وصف الصورة انجليزي</label>
                    <input type="text" name="descriptions_en[]" class="form-control"/>
                </div>
                <div class="col-lg-1">
                    <i class="fa fa-times remove-answer"></i>
                </div>
            </div> 
        `;
        $(".answers-holder").append(elm)
    })

    $(".answers-holder").on("click", ".answer-item i.remove-answer", function() {
        if($(this).attr('data-id')) {
            $.ajax({
                url:"/admin/gallery/image/" + $(this).attr('data-id') + "/delete",
                type:"get",
                success:function(data) {

                }
            })
        }
        $(this).parent().parent().remove()
    })

    $(".answers-holder .answer-item").on("keyup", "input.descriptions-input", function() {
        var field = "";
        if($(this).hasClass("ar")) {
            field = "description_ar"
        }else if($(this).hasClass('en')) {
            field = "description_en"
        }
        var id = $(this).attr('data-id')
        $.ajax({
            url:"/admin/gallery/image/" + $(this).attr('data-id') + "/update?content=" + $(this).val() + "&field=" + field + "&id=" + id,
            type:"get",
            success:function(data) {
               
            }
        })
    })
</script>
@endsection