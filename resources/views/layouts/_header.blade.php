<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            @if(Auth::check())

                <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown" role="button">
                    {{Auth::user()->name}} <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('users.show',Auth::user())}}">个人中心</a>
                    <a href="#" class="dropdown-item">编辑资料</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" id="logout" class="dropdown-item">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                             <button class="btn btn-primary btn-danger" type="submit" name="submit">
                               退出
                             </button>
                        </form>
                    </a>
                </div>
            </li>
            <li class="nav-item" ><a class="nav-link" href="{{route('signup')}}">注册            </a></li>

                @else

                <li class="nav-item"><a class="nav-link" href="{{route('help')}}"> 帮助</a></li>
                <li class="nav-item" ><a class="nav-link" href="#">登录            </a></li>
             @endif

        </ul>


    </div>
</nav>