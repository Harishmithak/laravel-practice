@extends('layout')
@section('content') 
 @section('title')
    Employee
  @endsection 
    <h2>Employee</h2>
    <form action="Emp" method="POST">
      @csrf
        <label for="department">DEPARTMENT:</label>
        <input type="text"  name="department" ><br><br>
        <label for="designation">DESIGNATION:</label>
        <input type="text" name="designation" ><br><br>
        <label for="salary">SALARY:</label>
        <input type="text"name="salary" ><br><br>
        <label for="companyname">Company Name:</label>
        <input type="text"name="companyname" ><br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection 