
@extends('layout')
  @section('content')
  @section('title')
Cgvak page
  @endsection
    <h1 style="color:white;text-align:center;background-color:black;font-family:cursive"> CGVAK DETAILS </h1>
    <div class="row">
        @foreach($cg as $name)
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body" style="background-color:LightGray">
                    <h5 class="card-title">{{$name}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection
