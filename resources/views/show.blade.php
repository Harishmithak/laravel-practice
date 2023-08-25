@extends('layout')
@section('content')
<div class="col-sm-6">




<div class = "mx-3 my-3">
<p> <a href="/Emp/{{$emp->id}}/edit">Edit</a> </p>
<form action ="{{$emp->id}}" method="post">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger" type="submit">Delete</button>
</form>
</div>

<div class="row py-3 mx-3">  
     <table class=table-border>
      <tr> <td> <strong> Customer Name </strong> </td> <td> {{$emp->name}}</td>
      <tr> <td> <strong>  Age </strong> </td> <td> {{$emp->age}} </td>
      <tr> <td> <strong>  Mail ID</strong> </td> <td> {{$emp->email}}</td>
      <tr> <td> <strong>  Contact No.</strong> </td> <td> {{$emp->contactno}}</td>

      <tr> <td> <strong>  Company Name</strong> </td> <td> {{$emp->companyid}}</td>
     </table>
</div>
</div>
@endsection