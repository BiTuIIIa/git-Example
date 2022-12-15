<?php

namespace App\Http\Controllers;

use App\Models\AgentModel;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(){
        return view('');
    }
    public function Area(){
        dd(12345);
        AgentModel::all();}

    public function privet(){
        echo 'hello word';
    }

    public function abs(){

    }
}
