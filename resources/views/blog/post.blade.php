<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$post->title}}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
     <div class="container">
         <h1>{{$post->title}}</h1>
         <h5>{{$post->published_at}}</h5>
         <hr>
         {!! nl2br(e($post->content)) !!}
         <hr>
         <button class="btn btn-primary" onclick="history.go(-1)">
              << Back
         </button>
     </div>
</body>
</html>
