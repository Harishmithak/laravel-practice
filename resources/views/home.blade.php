
@extends('layout')
  @section('content')
  @section('title')
 Home page
  @endsection
<div class="jumbotron text-center" id="animated-jumbotron">
  <h1>welcome to my homepage</h1>
  <img src="https://media.istockphoto.com/id/1265041897/vector/business-team-working-together-on-web-page-design-people-building-website-interface-on.jpg?s=612x612&w=0&k=20&c=0nwzJe_VQNlN94Own93LE5pqnYG5g8E1ez7M4u0NWvk=" alt="Company Office" style="height:300px;" class="img-fluid">
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $("#animated-jumbotron").hide().fadeIn(5500); 
});
</script>
