@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل {{$branch->title_ar}}</h3>
                    </div>
                    <form method="POST" action="/admin/branches/update"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$branch->id}}" />
                        <div class="row">
                            <div class="col-6">
                                <label>الاسم عربي</label>
                                <input value="{{$branch->title_ar}}" type="text" name="title_ar" class="form-control"  
                                       >
                            </div>
                            <div class="col-6">
                                <label>الاسم انجليزي</label>
                                <input value="{{$branch->title_en}}" type="text" name="title_en" class="form-control" 
                                       >
                            </div>

                            <div class="col-12">
                                <label>العنوان عربي</label>
                                <textarea name="address_ar" class="form-control">{{$branch->address_ar}}</textarea>
                            </div>

                            <div class="col-12">
                                <label>العنوان انجليزي</label>
                                <textarea name="address_en" class="form-control">{{$branch->address_en}}</textarea>
                            </div>

                            <div class="col-12">
                                <label>اوقات العمل عربي</label>
                                <textarea name="worktimes_ar" class="form-control">{{$branch->worktimes_ar}}</textarea>
                            </div>

                            <div class="col-12">
                                <label>اوقات العمل انجليزي</label>
                                <textarea name="worktimes_en" class="form-control">{{$branch->worktimes_en}}</textarea>
                            </div>

                            <div class="col-6">
                                <label>رقم الهاتف</label>
                                <input type="text" value="{{$branch->phone}}" name="phone" class="form-control"  
                                       >
                            </div>


                            <div class="col-6">
                                <label>صورة : </label>

                                <input type="file" name="image" class="form-control"
                                       accept="image/*" >
                                       <img src="/storage/images/{{$branch->image}}" style="width:150px;display:block" />

                            </div>


                        <label class="form-label" style="font-size:16pt;margin-bottom:20px">تحديد المكان علي الخريطة</label>
                        <div id="map-canvas" style="margin-bottom:25px;display:block;width:100%;height:450px;margin-top:20px"></div>

                        <input type="hidden" value="{{$branch->lat}}" name="lat" id="clinic-lat" />
                        <input type="hidden" value="{{$branch->long}}" name="long" id="clinic-long" />

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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
    <script>
        var map;
        var marker;
        var geocoder = new google.maps.Geocoder();
        var lat = 31.52935;
        var long = 35.0938;
        function init() {

            map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: {
                    lat: lat,
                    lng: long
                },
                zoom: 12
            });


            map.setCenter({ lat: lat, lng: long});

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng, true);
            });
            function placeMarker(location, isMap) {
                if(marker != null) {
                    marker.setMap(null);
                }
                console.log(location)
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                if(isMap) {
                document.getElementById("clinic-lat").value = location.lat()
                document.getElementById("clinic-long").value = location.lng()
                }
            }
            
            const myLatLng = { lat: parseFloat($("#clinic-lat").val()), lng: parseFloat($('#clinic-long').val()) };
            placeMarker(myLatLng, false)


        }
        google.maps.event.addDomListener(window, 'load', init);



    </script>
@endsection