@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">حسابي</h3>
                    </div>
                    <form method="POST" action="/admin/users/update">
                        @csrf
                        {{ method_field('PUT') }}
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <label><span style="color:#ff1f29"><b>*</b></span>تعديل المستخدم :</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}"
                               placeholder="إسم المستخدم" required>

                        <label>البريد الإلكتروني :</label>
                        <input type="text" name="email" class="form-control" value="{{$user->email}}"
                               placeholder="البريد الإلكتروني">

                        <label><span style="color:#ff1f29"><b>*</b></span>تعديل كلمة المرور :</label>
                        <input type="password" name="password" class="form-control" placeholder="كلمة المرور الجديدة" > 

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