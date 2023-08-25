<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // protected $fillable = ['name','age','email','contactno','companyid'];
    protected $guarded =[];

    public function Company(){
        return $this->belongsto(Company::class);
    }
    public function scopeAge($query){
        return $query->where('age', 21);
    }

    public function getCompanyidAttribute($attribute){
        //   $status=[
        //       1=>'CGvak',
        //       2=>'G2',
        //       3=>'Infosys',
        //   ];
        //   return $status[$attribute]; 
    
        return $this->activeOptions()[$attribute]; 

    
      }
      public function activeOptions(){
        return [ 
            1=>'CGvak',
              2=>'G2',
              3=>'Infosys',
        ];
       }
}
