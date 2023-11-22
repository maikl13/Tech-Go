@extends('layouts.template')
<style>
    .notification-type-item {
        display:none;
        width: 100%;
        float:left
    }
    .notification-type-item select {
        width: 100%;
    }
    .select2-container {
        width: 100% !important;
        margin-bottom:15px !important
    }
</style>
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#333">إرسال إشعار بإسم الشخص</h1>
                    </div>
                    <form method="POST" action="/admin/SendNotificationName">
                        @csrf
                        <div class="cal-12">


                            <select class="form-control" name="os">
                                <option value="android">android</option>
                                <option value="IOS">IOS</option>
                            </select>

                        </div>
                        <div class="cal-12" style="margin-top: 10px">


<input type="text" class="form-control"  placeholder="عنوان الاشعار"
          name="title" />

</div>
                        <div class="cal-12" style="margin-top: 10px">


                            <textarea class="form-control" style="height: 100px;" placeholder="نص الإشعار"
                                      name="body"></textarea>

                        </div>


                       <br/>
                        <select class="form-control notification-type" name="type" required>
                            <option value='' selected disabled>تحديد نوع الاشعار</option>
                            <option value="doctors">الاطباء</option>
                            <option value="users">المرضي</option>
                            <option value="doctors_section">تخصص الاطباء</option>
                            <option value="doctors_city">اطباء مدينة معينة</option>
                            <option value="single_doctor">طبيب محدد</option>
                            <option value="single_user">مريض محدد</option>
                        </select>  
                        
                        <br/>

                        <div class="notification-type-item doctors_section">
                            
                            <select name="super_category_id" class="form-control js-example-basic-single">
                                <option selected disabled value=''>تحديد التخصص</option>
                                @foreach($cats as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>

                        </div>

                       

                        <div class="notification-type-item doctors_city">
                            
                            <select name="city_id" class="form-control js-example-basic-single">
                                <option selected disabled value=''>تحديد المدينة</option>
                                @foreach($cities as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        
                        <div class="notification-type-item single_doctor">
                            
                            <select name="doctor_id" class="form-control js-example-basic-single">
                                <option selected disabled value=''>تحديد الطبيب</option>
                                @foreach($doctors as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>

                        </div>
                     
                        <div class="notification-type-item single_user">
                            
                            <select name="user_id" class="form-control js-example-basic-single">
                                <option selected disabled value=''>تحديد المستخدم</option>
                                @foreach($users as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group review-pro-edt mg-b-0-pt" style="margin-top: 10px">
                            <input type="submit"
                                   class="btn btn-ctl-bt waves-effect waves-light" value="حفظ"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.js-example-basic-single').select2();
    $(".notification-type").on("change", function() {
        $(".notification-type-item").hide();
        $("." + $(this).val()).show();
    })
</script>

@endsection