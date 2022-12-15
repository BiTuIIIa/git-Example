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
        return 'area';
    }
}
