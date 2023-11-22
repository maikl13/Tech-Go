@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#333">تعديل إعداد</h1>
                    </div>
                    <form method="post" action="{{ action('SettingsController@update',["setting_id",$setting->id]) }}"
                          enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <input type="hidden" name="setting_id" value="{{$setting->id}}"/>
                        <label>إسم الإعداد :</label>
                        <input type="text" name="key" class="form-control" placeholder="إسم الإعداد" value="{{$setting->key}}" required>
                        <label>قيمة الإعداد :</label>
                        <input type="text" name="value" class="form-control" placeholder="قيمة الإعداد" value="{{$setting->value}}" required>
                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection