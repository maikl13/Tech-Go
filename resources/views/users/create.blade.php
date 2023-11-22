@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة مستخدم</h3>
                    </div>
                    <form method="POST" action="{{ action('UsersController@store') }}">
                        @csrf
                        <label><span style="color:#ff1f29"><b>*</b></span>إسم المستخدم :</label>
                        <input type="text" name="name" class="form-control" placeholder="إسم المستخدم" required>
                        <label><span style="color:#ff1f29"><b>*</b></span>رقم الهاتف :</label>
                        <input type="number" name="phone" class="form-control" placeholder="رقم الهاتف يبدا بـ 00972"
                               required>
                        <label>البريد الإلكتروني :</label>
                        <input type="text" name="email" class="form-control" placeholder="البريد الإلكتروني">
                        <label><span style="color:#ff1f29"><b>*</b></span>كلمة المرور :</label>
                        <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
                        <label>حزمة الأسعار :</label>
                        <select name="package_id" class="form-control col-12" required>
                            @foreach($packages as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                        <label>نظام التشغيل :</label>
                        <select name="OS" class="form-control col-12" required>
                            <option value="android">android</option>
                            <option value="IOS">IOS</option>
                            <option value="web">web</option>
                        </select>
                        <label>الجنس :</label>
                        <select name="gender" class="form-control col-12" required>
                            <option value="male">ذكر</option>
                            <option value="female">أنثى</option>
                        </select>
                        <label>الحالة :</label>
                        <select name="active" class="form-control col-12" required>
                            <option value="true">فعال</option>
                            <option value="false">غير فعال</option>
                        </select>
                        <label>تاريخ الميلاد :</label>
                        <input type="date" name="birthdate" class="form-control" placeholder="تاريخ الميلاد">
                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection