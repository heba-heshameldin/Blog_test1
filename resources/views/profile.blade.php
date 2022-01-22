<x-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>
        <link rel="stylesheet" href="./assets/css/profile.css">
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
                                <h5 class="my-3">John Smith</h5>
                                <p class="text-muted mb-1">Full Stack Developer</p>
                                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>

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
                                        <p class="text-muted mb-0">Johnatan Smith</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">example@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(097) 234-5678</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Date of birth</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Jan 7, 1999</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
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
                                        <span class="my-3" style="font-size: 20px; padding-left: 10px;">John
                                            Smith</span>
                                        <div class="dropdown">
                                            <button class="dropbtn">Options</button>
                                            <div class="dropdown-content">
                                                <a href="#">Edit</a>
                                                <a href="#">Delete</a>
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
    </body>

    </html>
</x-layout>
