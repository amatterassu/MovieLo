<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
<div class="container" style = "margin-top: 90px">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4 style = "text-align:center;">@lang('lang.nineteen')</h4><hr>
           <form action="{{ route('auth.save') }}" method="post">

           @if(Session::get('success'))
             <div class="alert alert-success">
                {{ Session::get('success') }}
             </div>
           @endif

           @if(Session::get('fail'))
             <div class="alert alert-danger">
                {{ Session::get('fail') }}
             </div>
           @endif

           @csrf
           <div class="form-group">
                 <label>@lang('lang.twenty')</label>
                 <input type="text" class="form-control" name="name" placeholder="@lang('lang.25')" value="{{ old('name') }}">
                 <span class="text-danger">@error('name'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>@lang('lang.twentyone')</label>
                 <input type="text" class="form-control" name="email" placeholder="@lang('lang.26')" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>@lang('lang.twentytwo')</label>
                 <input type="password" class="form-control" name="password" placeholder="@lang('lang.27')">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <br>
              <button type="submit" class="btn btn-block btn-light" style = "color: black;">@lang('lang.23')</button>
              <br>
              <a href="{{ route('auth.login') }}" style = "margin-left:80px; color: white;">@lang('lang.24')</a>
           </form>
      </div>
   </div>
</div>
    
</body>
</html>