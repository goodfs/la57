<a href="{{route('users.show',$user->id)}}">

    <img class="gravatar" src="{{$user->gravatar(140)}}" alt="{{$user->name}}" alt="">



</a>
       <h1>{{$user->name}}</h1>