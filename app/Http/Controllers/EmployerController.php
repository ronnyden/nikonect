<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//name
//company
//company email
//phone
class EmployerController extends Controller
{
    public function create(){
        //load registration form
    }

    public function store(Request $request){
        DB::beginTransaction();
        try{
            Employer::create([
                'full_name'=>$request->name,
                'company'=>$request->company,
                'email'=>$request->email,
                'phone'=>$request->phone
            ]);

        }catch(QueryException $ex){
            DB::rollBack();
            return $ex->getMessage();
        }
        DB::commit();
    }
}
