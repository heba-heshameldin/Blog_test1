<nav style="position: fixed ; width: 100%; height:fit-content; z-index:100" class="navbar navbar-expand-sm navbar-light bg-light  ">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">B00T2R00T</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post">Posts</a>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="profile" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            My account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ URL::to('users/editprofile') }}">Edit Profile
                                </a></li>

                            <li>
                                <form method="POST" action="/logout" class="dropdown-item">
                                    @csrf
                                    <button type="submit"
                                        style="background-color:rgb(52, 58, 64); color:rgb(222, 226, 230); outline: none;">logout</button>
                                </form>
                            </li>
                        </ul>

                    @else

                        <form class="d-flex">
                            <a href="signin"> <button class="btn btn-primary" type="button" style="margin:5px;"
                                    action="signin.html">Sign in</button></a>
                            <a href="signup"> <button class="btn btn-primary" type="button" style="margin:5px;"
                                    action="signup.html">Sign up</button></a>
                        </form>

                @endif

            </ul>
        </div>
    </div>
</nav>

<br>
