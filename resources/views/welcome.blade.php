<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
   body {
      background-color:#020117;
      color: white;
   }
   form {
      margin-left: 650px;
      justify-content: center;
      align-items: center;
      margin-top:300px;
   }
   </style>
</head>
<body>
@if (count($errors)>0) 
    <div>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif

    <form action="http://localhost/moviel/public/multiuploads" method ="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="Movie name">Upload profile photo</label>
    <br />
    <input type="file" name = "photos[]" multiple />
    <br /><br />
    <input type="submit" value = "Upload" />
    </form>
</body>
</html>
