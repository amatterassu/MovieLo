<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
    <style>
        body{
            color: white;
            background-color:#020117;
        }
    </style>
</head>
<body>
<li><a href="{{ route('locale', __('lang.set_lang')) }}" style="color:white;margin-left:1455px;position:absolute;margin-top:40px;font-size:25px">@lang('lang.set_lang')</a></li>
<div class="container" style = "margin-top: 100px">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4 style = "text-align:center;">@lang('lang.eleven')</h4><hr>
           <form action="{{ route('auth.check') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
              <div class="form-group">
                 <label>@lang('lang.twelve')</label>
                 <input type="text" class="form-control" name="email" placeholder="@lang('lang.seventeen')" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>@lang('lang.thirteen')</label>
                 <input type="password" class="form-control" name="password" placeholder="@lang('lang.eighteen')">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <br>
              <button type="submit" class="btn btn-block btn-light" style = "color: black;">@lang('lang.fourteen')</button>
              <br>
              <a href="{{ route('auth.register') }}" style = "margin-left:128px; color:white;">@lang('lang.fifteen')</a>
           </form>
           <a href="http://127.0.0.1:8000/auth/login/send-email" style = "position:absolute; margin-left:229px; color:white; margin-top:10px;">@lang('lang.sixteen')</a>
      </div>
   </div>
</div>
    
</body>
</html>