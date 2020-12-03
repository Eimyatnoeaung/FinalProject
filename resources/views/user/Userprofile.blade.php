@extends('layout.pagelayout')
@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">User Profile</h1>
    <!-- Default form login -->
    <form class=" border border-light p-5" action="#!">


        <label for="">Title</label>
        <input type="text" id="defaultLoginFormEmail" class="form-control mb-4">

        <label for="">Photo</label>
        <input type="file" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

        <label for="">Content</label>
        <textarea name="" id="" cols="30" rows="10" class="form-control mb-4"></textarea>

        <!-- Add Post button -->
        <button class="btn btn-info btn-block my-4" type="submit">Add Post</button>


    </form>
    <!-- Default form login -->
</div>
@endsection
