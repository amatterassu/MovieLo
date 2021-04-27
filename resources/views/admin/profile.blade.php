<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
    <link href="{{ ('/css/style.css') }}" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<nav class = "navbar animate__animated animate__fadeInUp">
    	<div class = "max-width">
    		<div class = "logo"><a href="#">MovieLo</a></div>
    		<ul class = "menu">
    			<li><a href="/admin/dashboard">@lang('lang.three')</a></li>
    			<li><a href="/admin/profile">@lang('lang.four')</a></li>
                <!-- -->
                <li><a href="{{ route('auth.logout') }}">@lang('lang.five')</a></li>
                <li><a href="{{ route('locale', __('lang.set_lang')) }}">@lang('lang.set_lang')</a></li>
    		</ul>
    		<div class = "menu-btn">
    			<i class="fas fa-bars"></i>
    		</div>
    	</div>
    </nav>
    <img class = "student animate__animated animate__fadeInUp" src="/images/user.png" alt="">
    <br>
    <br>
    <div id = "home">
    <table class="table animate__animated animate__fadeInUp" id = "table1">
        <tbody>
          <tr>
            <th scope="row">@lang('lang.six')</th>
            <td>{{ $LoggedUserInfo['name'] }}</td>
          </tr>
          <tr>
            <th scope="row">@lang('lang.seven')</th>
            <td colspan="2"></td>
          </tr>
          <tr>
            <th scope="row">@lang('lang.eight')</th>
            <td>{{ $LoggedUserInfo['email'] }}</td>
          </tr>
          <tr>
            <th scope="row">@lang('lang.nine')</th>
            <td>{{ $LoggedUserInfo['created_at'] }}</td>
          </tr>
        </tbody>
    </table>
</div>
<button type="" class="btn btn-block btn-light" style = "color: black; width:130px; margin-left:710px;"><a href="http://localhost/moviel/public/">@lang('lang.ten')</a> </button>
</body>
