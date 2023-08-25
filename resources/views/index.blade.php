<p > <a href="form"> Add New Customer </a></p>  
 <table class="table table-border table-success table-striped table-hover"> 
 <thead>
     <tr>
       <th scope="col">id</th>
       <th scope="col">Employee Name</th>
       <th scope="col">Age</th>
         <th scope="col">Mail ID</th>
       <th scope="col">Contact No.</th>
       <th scope="col">Company</th> 
     </tr>
   </thead>
   <tbody> 
 @foreach ($emp as $emp)
     <tr>
       <th scope="row">{{$emp->id}}</th>

       <td> <a href="/Emp/{{$emp->id}}">{{$emp->name}}</a></td>
       <td>{{$emp->age}}</td>
           <td>{{$emp->email}}</td>

       <td>{{$emp->contactno}}</td>

       <td>{{$emp->companyid}}</td> 
     </tr>   
 @endforeach
 </table>
