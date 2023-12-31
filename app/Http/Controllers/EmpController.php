<?php


namespace App\Http\Controllers;
use App\Events\NewCustomerHasRegisteredEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\EmpController;
use App\Models\Employee;
use App\Models\Employeedetail;
use App\Models\Company;
use App\Mail\WelcomeNewUserMail;




class EmpController extends Controller
{

  // public function __construct(){
  //   $this->middleware('auth');
  //   }


  public function __construct()
{
    $this->middleware('auth')->except(['emp']); 
}

// public function __construct()
// {
//     $this->middleware('auth')->only(['empd']); 
// }


    public function details(){
       
         $cgvak=['harishmitha','harita','yamini','vignesh','sharon','hemanth','sivabharath','srikanth','darshan','arun','harshan','karthikeyan'];
         return view('cgvak', ['cg' => $cgvak]);
       }

        //Employee table without where condition
       public function emp(){
        // $emp=Employee::all();
       $emp = Employee::paginate(4);
        return view('employee', ['emp' => $emp]);
        // dd($emp);
       }

   
       public function empindex(){
        $emp=Employee::all();
      
        return view('index', ['emp' => $emp]);
        // dd($emp);
       }

       public function showEmployeeForm()
       {
           $Companies = Company::all();
           return view('form', compact('Companies'));
       }

       public function show(Employee $emp){ 
       
        return  view('show',compact('emp'));
       }

       public function edit(Employee $emp){ 
       
         $Companies = Company::all();
         return view ('edit',compact('emp','Companies'));
        }

        public function update(Employee $emp){

          $emp->update($this->validateRequest());
          return redirect('/Emp'.$emp->id);
         }



         private function validateRequest(){
          return request()->validate([
            'name' => 'required|string|min:3',
            'age' => 'required|integer',
            'email' => 'required|email',
            'contactno' => ['required', 'integer'],
      
            'companyid' => 'required']); 
       }

       public function destroy(Employee $emp){
        $emp -> delete();
        return redirect('home');
       }
       
       public function create( ){
        $Companies = Company::all();
        $emp = new Employee();   
        return view ('create',compact('Companies','emp'));
      }
    //Employee table with where condition
    //    public function emp(){
    //     $emp=Employee::where('age',21)->get();
    //     return view('employee', ['emp' => $emp]);
    //    }
    //Employee table compact 
    // public function emp(){
    //     $emp=Employee::age()->get();
    
    //     return view ('employee',compact('emp'));
    // }

//---------------------------------------------------------------------------------
       //Employee detail table without where condition
       public function empd(){
        $emp=Employeedetail::all();
        return view('empdetails', ['emp' => $emp]);
        // dd($emp);
       }

     //Employee detail table with where condition
    //    public function empd(){
    //     $emp=Employeedetail::where('salary',30000)->get();
    //     return view('empdetails', ['emp' => $emp]);
    //     // dd($emp);
    //    }
    //Employee detail table with where condition using compact 
    // public function empd(){
    //         $emp=Employeedetail::salary()->get();
    //         return view ('empdetails',compact('emp'));
            
    //        }
//-----------------------------------------------------------------------
           public function store()
           {
            $data = request()->validate([   
              'name' => 'required|min:5|max:10',
              'age' => 'required',
              'email' => 'required|email',
              'contactno' => 'required',
              'companyid' => 'required'
        
            ]);
            // $employee= Employee::create($data); 
            // $Employee = $Employee::create($this->validateRequest());
            // Mail::to($Employee->email)->send(new WelcomeNewUserMail());
          

            dump('Newsletter Subsription');

    dump('Notification to Admin about New User');
 

    

            //  $emp6 = new Employee();    
            //  $emp6->name = request('name');
            //  $emp6->age = request('age');
            //  $emp6->email = request('email');
            //  $emp6->contactno = request('contactno');
            //  $emp6->companyid=request('companyid');
   
  
            //  $emp6->save();
           
            // $emp7 = new Employeedetail();    
            // $emp7->department = request('department');
            // $emp7->designation = request('designation');
            // $emp7->salary= request('salary');
        
            // $emp7->companyname = request('companyname');
        
            // $emp7->save();
    $employee= Employee::create($data); 

    event(new NewCustomerHasRegisteredEvent($employee));
           } 
       }

