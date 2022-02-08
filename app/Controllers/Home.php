<?php

namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\User;

class Home extends BaseController
{
    public function index()
    {
        $user= new User();

        $data['user']=$user->getUser();

        return view('index',$data);
    }

    function create(){

        return view('create.php');

    }

    function save()
    {
        echo "in save";
        // $user= new User();

        // $data['user']=$user->getUser();

        // return view('index',$data);
    }
    function edit($i){
        echo $i;
    }
}
