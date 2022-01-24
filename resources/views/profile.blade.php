<x-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>
        <link rel="stylesheet" href="./assets/css/profile.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <section style="background-color: #eee;">
            <div class="container py-5">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3">{{ @Auth::user()->name ?? 'No name' }}</h5>
                                <p class="text-muted mb-1">Full Stack Developer</p>


                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary" style="margin-bottom: 20px"><a
                                        href="editprofile" style="color: white; text-decoration: none">Edit
                                        Profile</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" name="name">{{ @Auth::user()->name ?? 'No name' }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" name="email">
                                            {{ @Auth::user()->email ?? 'No email' }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" name="phone">
                                            {{ @Auth::user()->phone ?? 'No phone' }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" name="dateofbirth">Date of birth</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" name="dateofbirth">
                                            {{ @Auth::user()->date_of_birth ?? 'No birth date' }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" name="address">
                                            {{ @Auth::user()->address ?? 'No address' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <h3 class="mb-4">Posts</h3>
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                            alt="avatar" class="rounded-circle img-fluid"
                                            style="width: 50px; display: inline-block">
                                        <span class="my-3"
                                            style="font-size: 20px; padding-left: 10px;">{{ @Auth::user()->name ?? 'No name' }}</span>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                ⚙️
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>


                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-1"
                                        style="font-size: 18px; margin-top: 20px; padding-left: 8%">Lorem ipsum
                                        dolor sit amet
                                        consectetur adipisicing elit. Fugiat tempora quisquam illo vitae expedita
                                        eaque
                                        harum odit, error consequuntur quas fuga illum velit, reprehenderit numquam,
                                        repellendus dolorum exercitationem eum totam.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
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
</x-layout>
