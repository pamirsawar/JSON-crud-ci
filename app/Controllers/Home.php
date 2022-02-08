<?php

namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\User;

// defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends BaseController
{
    public function index()
    {
        $user= new User();

        $data['user']=$user->getUsers();

        return view('index',$data);
    }

    function create(){

        return view('create.php');

    }

    function save()
    {
        $user= new User(); 

       if($user->create($this->request->getPost()))
       {
  
            return redirect()->route('index');
       }

    }
    function edit($i){
        // echo $i;

        $user= new User(); 
        $data['data'] = $user->getUser($i);
        $data['data']['id']=$i;
        return view('edit',$data);
    }
    function update(){
        $user= new User(); 

        if($user->updateUser($this->request->getPost()))
        {
             return redirect()->route('index');
        }
    }

    function delete($i){
        $user= new User(); 

        if($user->deleteUser($i)){
            return redirect()->route('index');

        }

    }
}
