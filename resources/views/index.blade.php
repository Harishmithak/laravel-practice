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


<style>

  .table-container {
    margin: 20px;
  }


  .table {
    width: 100%;
    border-collapse: collapse;
  }


  .table th {
    background-color: #f2f2f2;
    text-align: left;
    padding: 8px;
    font-weight: bold;
  }

  
  .table tr:nth-child(even) {
    background-color: #f2f2f2;
  }


  .table td {
    padding: 8px;
  }

  a {
    text-decoration: none;
    color: #007bff;
  }


  a:hover {
    text-decoration: underline;
  }
</style>