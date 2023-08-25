
@extends('layout')
  @section('content')
  @section('title')
Cgvak page
  @endsection
    <h1 style="color:white;text-align:center;background-color:black;font-family:cursive"> EMPLOYEES </h1>
    <div class="row">
        @foreach($emp as $emp)
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{$emp->name}}</h5>
                    <h5 class="card-title">{{$emp->age}}</h5>
                    <h5 class="card-title">{{$emp->email}}</h5>
                    <h5 class="card-title">{{$emp->contactno}}</h5>
                    <h5 class="card-title">{{$emp->companyid}}</h5>

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