<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//id
//category
//description
//due date
class JobsControler extends Controller
{
    public function create(){
        //return view('jobs.create');
    }

    public function store(Request $request){
        DB::beginTransaction();
        try{
            Job::create([
                'category'=>$request->category,
                'description'=>$request->description,
                'due_date'=>$request->date
              ]);
        }catch(QueryException $ex){
            DB::rollBack();
            return $ex->getMessage();
        }
        DB::commit();
        
    }

 public function getAllJobs(){
    $jobs = Job::get();
    return $jobs;
 }
 public function getUserJobs($user_id){
     $jobs = Job::where('user_id',$user_id)->get();
     return $jobs;
 }
 public function getJob($id){
     $job = Job::find($id);
     return $job;
 }

 public function update(Request $request,$id){
     DB::beginTransaction();
     try{
         Job::find($id)->update([[
             'category'=>$categry
         ]])
     }
 }

}
