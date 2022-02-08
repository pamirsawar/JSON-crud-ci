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
 echo "Test";
 die();
        return view('create.php');

    }

    public function save()
    {
        echo "in save";
        // $user= new User();

        // $data['user']=$user->getUser();

        // return view('index',$data);
    }
}
