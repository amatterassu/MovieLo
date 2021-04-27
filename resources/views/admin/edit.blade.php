
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
    			<li><a href="/admin/dashboard">Home</a></li>
    			<li><a href="/admin/profile">Profile</a></li>
    			<li><a href="">Contact Us</a></li>
    			<li><a href="{{ route('auth.logout') }}">Logout</a></li>
    		</ul>
    		<div class = "menu-btn">
    			<i class="fas fa-bars"></i>
    		</div>
    	</div>
</nav>
<div class="container animate__animated animate__fadeInUp" style = "margin-top: 60px">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4 style = "text-align:center;">EDIT PROFILE</h4><hr>
           <form action="{{ 'admin.update' }}" method="post">

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
                 <label>Name</label>
                 <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                 <span class="text-danger">@error('name'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Birth Date</label>
                 <input type="text" class="form-control" name="birthdate" placeholder="MM/DD/YYYY" onfocus="(this.type='date')">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <br>
              <button type="submit" class="btn btn-block btn-light" style = "color: black;">Save changes</button>
              <br>
           </form>
           <button type="" class="btn btn-block btn-light" style = "color: black;"><a href="http://localhost/moviel/public/">Upload profile photo</a> </button>
      </div>
   </div>
</div>
</body>