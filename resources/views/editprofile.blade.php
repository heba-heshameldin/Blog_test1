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
                            class="font-weight-bold">{{ @Auth::user()->name ?? 'No name' }}</span><span
                            class="text-black-50">{{ @Auth::user()->email ?? 'No email' }}</span><span> </span></div>
                </div>
                <div class="col-md-8 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <form class="" action="{{ URL::to('users/editprofile') }}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Full Name</label><input
                                        type="text" name="name" class="form-control"
                                        value="{{ @Auth::user()->name ?? 'No name' }}"></div>
                                <div class="col-md-12"><label class="labels">Email</label><input
                                        type="email" class="form-control" name="email"
                                        value="{{ @Auth::user()->email ?? 'No email' }}"></div>
                                <div class="col-md-12"><label class="labels">Phone</label><input
                                        type="number" class="form-control" name="phone"
                                        value="{{ @Auth::user()->phone ?? '0' }}"></div>
                                <div class="col-md-12"><label class="labels">Date of birth</label><input
                                        type="text" name="date_of_birth" class="form-control"
                                        value="{{ @Auth::user()->date_of_birth ?? 'No birth date' }}">
                                </div>
                                <div class="col-md-12"><label class="labels">Address</label><input
                                        type="text" class="form-control" name="address"
                                        value="{{ @Auth::user()->address ?? 'No address' }}"></div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                    type="submit"><a style="color: white; text-decoration: none">Save
                                        Profile</a></button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>

    </body>

    </html>
</x-layout>
