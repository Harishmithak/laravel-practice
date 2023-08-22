@extends('layout')
  @section('content')
  @section('title')
G2 page
  @endsection
    <h1 style="color:white;background-color:black;text-align:center;font-family:cursive"> G2 details</h1>
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