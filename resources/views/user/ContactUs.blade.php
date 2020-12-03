@extends('layout.pagelayout')
 @section('content')
<div class="container-fluid">
    <h1 class="mt-4">Contact Us</h1>
    <div class="row">
        <div class="col-md-6">
            <!-- map here -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488799.48748486425!2d95.90136324207293!3d16.838952470655467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2z4YCb4YCU4YC64YCA4YCv4YCU4YC6!5e0!3m2!1smy!2smm!4v1606993212318!5m2!1smy!2smm"
                width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-6">
            <!-- Default form login -->
            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Contact Us</p>
                <!-- username -->
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Username">

                <!-- Email -->
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                <!-- message -->
                <textarea name="" id="" cols="30" rows="10" class="form-control mb-4" placeholder="Your Message"></textarea>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Send Message</button>

                <!-- Register -->
                <p>Not a member?
                    <a href="">Register</a>
                </p>

            </form>
            <!-- Default form login -->
        </div>
    </div>
</div>
@endsection
