
@extends('layout')
  @section('content')
  @section('title')
Cgvak page
  @endsection
    <h1 style="color:white;text-align:center;background-color:black;font-family:cursive"> EMPLOYEE DETAILS </h1>
    <div class="row">
        @foreach($emp as $emp)
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{$emp->department}}</h5>
                    <h5 class="card-title">{{$emp->designation}}</h5>
                    <h5 class="card-title">{{$emp->salary}}</h5>
                    <h5 class="card-title">{{$emp->companyname}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection

    <style> 
    .card-body{
      background-color:LightGray;
    }
    .card-body:hover {
      background-color: lightblue; 

  }
</style>


