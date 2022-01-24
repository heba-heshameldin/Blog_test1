<!DOCTYPE html>
<html lang="en">

<head>
    <title>B00T2R00T</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <nav style="position: fixed ; width: 100%; z-index:100" class="navbar navbar-expand-sm navbar-light bg-light  ">
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
                            <a class="nav-link dropdown-toggle" href="profile" id="navbarDarkDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
