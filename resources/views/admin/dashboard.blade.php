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
    			<li><a href="">@lang('lang.three')</a></li>
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
    <h1 class = "animate__animated animate__fadeInUp" style = "color:white; margin-left:570px;">⭐@lang('lang.one')⭐</h1>
    <h1 style = "position:absolute; color:white; margin-top:2610px; margin-left:580px;">💣@lang('lang.two')🪁</h1>
    <div class="wrapper">
        @foreach ($topRated as $topRated1)
        <div class="card animate__animated animate__fadeInUp">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$topRated1['poster_path'] }}" alt = "poster">
            <div class="descriptions">
                <h1>{{ $topRated1['title'] }}</h1>
                <p>
                {{ $topRated1['overview'] }}
                </p>
                <button>
                    <i class="fab fa-youtube"></i>
                    Watch trailer on YouTube
                </button>
            </div>
        </div>
        @endforeach
        @foreach ($popularMovies as $movie)
        <div class="card">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt = "poster">
            <div class="descriptions">
                <h1>{{ $movie['title'] }}</h1>
                    <p>{{ $movie['overview'] }}</p>
                    <button>
                    <i class="fab fa-youtube"></i>
                    Watch trailer on YouTube<
                </button>
            </div>
        </div>
        @endforeach
        <!--
        <div class="card">
            <img src="https://i.pinimg.com/originals/86/55/80/865580314a24d809e6fb0f12ce72e738.jpg" alt="">
            <div class="descriptions">
                <h1></h1>
                <p>
</p>
                <button>
                    <i class="fab fa-youtube"></i>
                    
                </button>
            </div>
        </div>
        <div class="card">
            <img src="https://i.pinimg.com/originals/86/55/80/865580314a24d809e6fb0f12ce72e738.jpg" alt="">
            <div class="descriptions">
                <h1></h1>
                <p>
</p>
                <button>
                    <i class="fab fa-youtube"></i>
                    
                </button>
            </div>
</div>
    </div>
    <div class="wrapper2">
        <div class="card">
            <img src="https://m.media-amazon.com/images/M/MV5BNjNhZTk0ZmEtNjJhMi00YzFlLWE1MmEtYzM1M2ZmMGMwMTU4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg">
            <div class="descriptions">
                <h1>Matrix</h1>
                <p>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                </p>
                <button>
                    <i class="fab fa-youtube"></i>
                    PLAY
                </button>
            </div>
        </div>
        <div class="card">
            <img src="https://images-na.ssl-images-amazon.com/images/I/51oBxmV-dML._AC_.jpg" alt="">
            <div class="descriptions">
                <h1></h1>
                    <p>                    </p>
                    <button>
                    <i class="fab fa-youtube"></i>
                    
                </button>
            </div>
        </div>
        <div class="card">
            <img src="https://i.pinimg.com/originals/86/55/80/865580314a24d809e6fb0f12ce72e738.jpg" alt="">
            <div class="descriptions">
                <h1></h1>
                <p>
</p>
                <button>
                    <i class="fab fa-youtube"></i>
                    
                </button>
            </div>
        </div>
        <div class="card">
            <img src="https://i.pinimg.com/originals/86/55/80/865580314a24d809e6fb0f12ce72e738.jpg" alt="">
            <div class="descriptions">
                <h1></h1>
                <p>
</p>
                <button>
                    <i class="fab fa-youtube"></i>
                    
                </button>
            </div>
</div>
    </div>-->
    <!--
    <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
                   <h4>Dashboard</h4><hr>
                   <table class="table table-hover">
                      <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                      </thead>
                      <tbody>
                         <tr>
                                -----------------------------------------------------
                            <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                         </tr>
                      </tbody>
                   </table>

                   <ul>
                       <li><a href="/admin/dashboard">Dashboard</a></li>
                       <li><a href="/admin/profile">Profile</a></li>
                       <li><a href="/admin/settings">Settings</a></li>
                       <li><a href="/admin/staff">Staff</a></li>
                   </ul>
            </div>
         </div>
    </div>
-->
</body>
</html>