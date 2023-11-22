@extends('layouts.template')



@section('content')
<style>
    .widget-chart-one .widget-heading {
        justify-content:center
    }
</style>

<div class="container">

    <div class="row justify-content-center">


        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">زيارات الموقع</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item">{{$stats['website_views']}}</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">نقرات اتصال الواتساب</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item">{{$stats['whatsapp_clicks']}}</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">الرسائل</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item">{{$stats['messages']}}</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">المشاريع</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item">{{$stats['projects']}}</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">المنتجات</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item">{{$stats['products']}}</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">اشتراكات النشرة البريدية</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item">{{$stats['subscribers']}}</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

    </div>

</div>

@endsection

