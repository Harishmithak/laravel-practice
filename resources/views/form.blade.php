
@extends('layout')
@section('content')
    @section('title')
        Employee
    @endsection
    <h2>Employee</h2>
    <form action="Emp" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name">
            <div class="error-message">{{ $errors->first('name') }}</div><br><br>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="text" name="age">
            <div class="error-message">{{ $errors->first('age') }}</div><br><br>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email">
            <div class="error-message">{{ $errors->first('email') }}</div><br><br>
        </div>
        <div>
            <label for="contactno">Contact Number:</label>
            <input type="text" name="contactno">
            <div class="error-message">{{ $errors->first('contactno') }}</div><br><br>
        </div>
        <div class="mb-3 mt-3">
  <label for="companyid" class="col-sm-2">Company Name: </label>
  <div class="col-sm-10">
  <select name="companyid" id="companyid">
      <option value="" disabled> Select Company ID </option>
      @foreach($Companies as $company)
          <option value="{{$company->id}}"> {{$company->cpyname}} </option>
      @endforeach
  </select>
  </div>
</div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


<style>
  .error-message {
    color: red;
}
  </style>