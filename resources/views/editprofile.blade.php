<x-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/editprofile.css">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>

    <body>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                            class="rounded-circle mt-5" width="150px"
                            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                            class="font-weight-bold">Edogaru</span><span
                            class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-8 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Full Name</label><input
                                    type="text" class="form-control" placeholder="Enter Name..." value=""></div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                    class="form-control" placeholder="Enter Email..." value=""></div>
                            <div class="col-md-12"><label class="labels">Phone</label><input type="number"
                                    class="form-control" placeholder="Enter Phone..." value=""></div>
                            <div class="col-md-12"><label class="labels">Date of birth</label><input
                                    type="text" class="form-control" placeholder="Enter Date of birth..." value="">
                            </div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text"
                                    class="form-control" placeholder="Enter Address..." value=""></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button"><a
                                    style="color: white; text-decoration: none" href="profile">Save Profile</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>

    </html>
</x-layout>
