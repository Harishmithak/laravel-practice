<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EmpController;
use App\Models\Employee;
use App\Models\Employeedetail;

class EmpController extends Controller
{
    public function details(){
       
         $cgvak=['harishmitha','harita','yamini','vignesh','sharon','hemanth','sivabharath','srikanth','darshan','arun','harshan','karthikeyan'];
         return view('cgvak', ['cg' => $cgvak]);
       }

        //Employee table without where condition
    //    public function emp(){
    //     $emp=Employee::all();
    //     return view('employee', ['emp' => $emp]);
    //     // dd($emp);
    //    }

    //Employee table with where condition
    //    public function emp(){
    //     $emp=Employee::where('age',21)->get();
    //     return view('employee', ['emp' => $emp]);
    //    }
    //Employee table compact 
    public function emp(){
        $emp=Employee::age()->get();
        return view ('employee',compact('emp'));
    }
//---------------------------------------------------------------------------------
       //Employee detail table without where condition
    //    public function empd(){
    //     $emp=Employeedetail::all();
    //     return view('empdetails', ['emp' => $emp]);
    //     // dd($emp);
    //    }

     //Employee detail table with where condition
    //    public function empd(){
    //     $emp=Employeedetail::where('salary',30000)->get();
    //     return view('empdetails', ['emp' => $emp]);
    //     // dd($emp);
    //    }
    //Employee detail table with where condition using compact 
    public function empd(){
            $emp=Employeedetail::salary()->get();
            return view ('empdetails',compact('emp'));
            
           }


           public function store()
           {
       
          
             $emp6 = new Employee();    
             $emp6->name = request('name');
             $emp6->age = request('age');
             $emp6->email = request('email');
           
             $emp6->contactno = request('contactno');
        
             $emp6->save();
       
      
       
           } 
       }

