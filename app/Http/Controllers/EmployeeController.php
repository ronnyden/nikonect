<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//ID number
//email
//resume
//profile(to be handled by files upload modules)
//proffesion category
class EmployeeController extends Controller
{
    public function create(){
        //load registration form
    }

    public function store(Request $request){
        DB::beginTransaction();
        try{
            Employee::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'id_number'=>$request->id_number,
                'proffesion_category'=>$request->category,
            ]);
        }catch(QueryException $ex){
            DB::rollBack();
            return $ex->getMessage();
        }
        DB::commit();
    }
}
