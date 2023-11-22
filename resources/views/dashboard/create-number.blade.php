@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة انجاز</h3>
                    </div>
                    <form method="POST" action="/admin/numbers/create"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label>العنوان عربي</label>
                                <input type="text" name="title_ar" class="form-control"  
                                       >
                            </div>
                            <div class="col-6">
                                <label>العنوان انجليزي</label>
                                <input type="text" name="title_en" class="form-control" 
                                       >
                            </div>

                            <div class="col-6">
                                <label>القيمة</label>
                                <input type="number" name="value" class="form-control" 
                                       >
                            </div>




                            <div class="col-6">
                                <label>صورة : </label>
                                <input type="file" name="image" class="form-control"
                                       accept="image/*" >
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
                placeMarker(event.latLng);
            });
            function placeMarker(location) {
                if(marker != null) {
                    marker.setMap(null);
                }
                console.log(location)
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                document.getElementById("clinic-lat").value = location.lat()
                document.getElementById("clinic-long").value = location.lng()
            }


        }
        google.maps.event.addDomListener(window, 'load', init);



    </script>
@endsection