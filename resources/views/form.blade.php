@extends('layout')
@section('content') 
 @section('title')
    Employee
  @endsection 
    <h2>Employee</h2>
    <form action="Emp" method="POST">
        <label for="name">Name:</label>
        <input type="text"  name="name" ><br><br>
        <label for="age">Age:</label>
        <input type="text" name="age" ><br><br>
        <label for="email">Email:</label>
        <input type="text"name="email" ><br><br>
        <label for="contactno">Contact Number:</label>
        <input type="text"name="contactno" ><br><br>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection 