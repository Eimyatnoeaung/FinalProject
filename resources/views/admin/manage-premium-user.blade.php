@extends('layout.adminlayout')
@section('content')
<h1>Manage Premium User page</h1>
<table class="table table-hover ">
    <thead class="green white-text">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">IsAdmin</th>
        <th scope="col">IsPremium</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>anna@gmail.com</td>
        <td>true</td>
        <td>true</td>
        <td><button class="btn btn-sm green white-text">Update</button></td>
        <td><button class="btn btn-sm red white-text">Delete</button></td>
      </tr>

    </tbody>
  </table>
@endsection
