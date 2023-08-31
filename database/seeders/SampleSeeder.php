<?php

namespace Database\Seeders;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Employee::truncate();
    $report = fopen(public_path("data/Employee.csv"),"r");
    $datarow = true;
    while (($data = fgetcsv($report, 4000, ",")) !== FALSE){
      if(!$datarow){
        Employee::create([
        "name" => $data[0],
        "age" => $data[1],
        "email" => $data[2],
        "contactno" => $data[3],
        "companyid" => $data[4]
     ]);
       }
     $datarow=false;
  } 
fclose($report);
    }
}
