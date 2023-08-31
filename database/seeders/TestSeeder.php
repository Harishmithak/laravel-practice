<?php

namespace Database\Seeders;
use App\Models\Employeedetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Employeedetail::truncate();
    $report = fopen(public_path("data/Employeedetail.csv"),"r");
    $datarow = true;
    while (($data = fgetcsv($report, 4000, ",")) !== FALSE){
      if(!$datarow){
        Employeedetail::create([
        "department" => $data[0],
        "designation" => $data[1],
        "salary" => $data[2],
        "companyname" => $data[3]
     ]);
       }
     $datarow=false;
  } 
fclose($report);
        
    }
    

}
