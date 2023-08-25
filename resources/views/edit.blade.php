@extends('layout')
@section('content')

  <div class="py-3">
    <form action="/Emp/{{$emp->id}}" method="post">
    @method('PATCH')
    @include('newform')
    <div class="mb-3 mt-3  col-sm-6">  
       <button type="submit" class="btn btn-primary">Update Customer</button>
     </div>  
@csrf
</form> 
</div>
@endsection