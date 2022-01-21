<x-layout>
    <section class="vh-100" style="margin-top: 100px">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form class="" action="{{ URL::to('users/store') }}" method="post">


                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Enter your email</label>
                            <input type="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <span style="color: red"> @error('email'){{ $message }}@enderror</span>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Enter your Password</label>
                                <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Enter password" />
                                <span style="color: red"> @error('password'){{ $message }}@enderror</span>


                                </div>
                                <div class="form-outline mb-4">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign Up </button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0"> Have an account? <a href="signin"
                                            class="link-danger">Login</a></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>


                </div>
            </section>
        </x-layout>
