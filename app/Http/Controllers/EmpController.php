<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EmpController;

class EmpController extends Controller
{
    public function details(){
        $cgvak=['harishmitha','harita','yamini','vignesh','sharon','hemanth','sivabharath','srikanth','darshan','arun','harshan','karthikeyan'];
        return view('cgvak', ['cg' => $cgvak]);
       }
}
