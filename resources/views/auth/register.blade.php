@extends("layout.authlayout")
@section("content")
<div class="container">
    <div class="col-md-4 offset-4">
        <!-- Material form register -->
<div class="card mt-5">

    <h5 class="card-header pink white-text text-center py-4">
        <strong>Register</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="{{ route("post_register") }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="col">
                    <!-- Username -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="username" value="{{old('username')}}">
                        @error('username')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="materialRegisterFormFirstName">Username</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control" name="email" value="{{old('email')}}">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="materialRegisterFormEmail">E-mail</label>

            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="password" value="{{old('password')}}">
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="materialRegisterFormPassword">Password</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    {{-- At least 8 characters and 1 digit --}}
                </small>
            </div>
            <label for="">Select Your Profile Picture</label>
            <div class="md-form">

                <input type="file" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="image" value="{{old('image')}}">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Sign up button -->
            <button class="btn btn-outline-pink btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>
            <p>
                <a href="{{ route("login") }}">Already Register?</a>
            </p>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
    </div>
</div>

@endsection

