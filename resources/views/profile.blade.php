<x-layout>


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
                            <button type="button" class="btn btn-primary" style="margin-bottom: 20px"><a href="edit"
                                    style="color: white; text-decoration: none">Edit
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
                    @foreach ($posts as $post)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <h3 class="mb-4">{{ $post->title }}</h3>
                                        <img src="{{ URL::to('/storage/posts') . '/' . $post->thumbnail }}"
                                            alt="avatar" class="rounded img-fluid"
                                            style="width: 300px; ">
                                        <div class="btn-group" style="margin-left: 450px ;">
                                            <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false" style="margin-top: 0px">
                                                ⚙️
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="/posts/view/{{ $post->id }}">view</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/posts/edit/{{ $post->id }}">Edit</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/posts/delete/{{ $post->id }}">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-4"
                                        style="font-size: 18px; margin-top: 2px; margin-left: 10px; padding-left: 3%">
                                        {{ $post->description }}
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>

</x-layout>
