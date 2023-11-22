@extends('layouts.app')

@section('content')

<div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">

                <div class="form-container">
 
                    <div class="form-content ptb-50">

                        <h1 class="">تسجيل الدخول</h1>
                    
                        @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-arrow-right alert-icon-right alert-light-danger mb-4" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                <strong>{{$error}}</strong>
                            </div>
                        @endforeach
                        @endif            
                        
                        <form action="{{url('/')}}/login" method="post" class="text-left">
                            {{csrf_field()}}
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="email">البريد الالكتروني</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input  value="{{ old('email') }}" id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="البريد الالكتروني">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">كلمة المرور</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="كلمة المرور">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        @if(env('GOOGLE_RECAPTCHA_KEY'))
                                            <div class="g-recaptcha"
                                                data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                                            </div>
                                            <br/>
                                        @endif                                          
                                        <button type="submit" class="btn btn-primary" value="">تسجيل الدخول</button>
                                    </div>
                                </div>

              
                            </div>
                        </form>

                    </div>  
                                  
                </div>
                
            </div>
        </div>
    </div>

@endsection
@section('js')
<script>
    $("form").submit(function(event) {

//    var recaptcha = $("#g-recaptcha-response").val();
//    if (recaptcha === "") {
//       event.preventDefault();
//       alert("الرجاء تأكيد اختبار التحقق");
//    }
});
</script>
@endsection

