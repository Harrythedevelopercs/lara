<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\employee;



class userController extends Controller
{

    function index(){
        return "Proof Your Identity";
    }

    function showUsers(){

        // $data = DB::select("SELECT * FROM users ");
        $data = employee::paginate(10);

        return view('users', ['Users'=>$data]);
    }

    function user($email){
        $data = DB::select("SELECT * FROM employees Where Email = '".$email."'");
        return view('user', ['Users'=>$data]);
    }

    function adduser(){
        return view('addemp');
    }

    function adduserf(Request $req){

        array_push($this->data,$req->input());
        return $this->data;
    }
}
