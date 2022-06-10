<?php

namespace App\Http\Controllers;

use App\Models\Learner;
use Illuminate\Http\Request;

class RegistrationListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $learners =  Learner::where('EnrollmentStatus', '=', 'Incomplete')->get();
       return view ('registerformlist', ['learners' => $learners]);
    }

    public function approveLearners(){
        $request = Request()->all();
        $id = $request['num'];
        $learners = Learner::find($id);
        $learners['EnrollmentStatus'] = 'Pre-Registered';
        $learners->save();
        return back();
    }

    public function declineLearners(){
        $request = Request()->all();
        $id = $request['num'];
         Learner::destroy($id);
        return back();
    }
    }
