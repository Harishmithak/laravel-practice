@include('layout')

@if (session()->has('action-feedback'))
 <div class="alert alert-success" role="alert">
<strong>  </strong> {{session()->get('action-feedback')}} 
</div>
@endif 


