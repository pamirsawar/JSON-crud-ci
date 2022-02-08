<?php

namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\User;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // return view('index');
        // $data = array(
        //     'title' => 'My Title',
        //     'heading' => 'My Heading',
        //     'message' => 'My Message'
        // );

        $user= new User();

        $data['user']=$user->getUser();

//         echo "<pre>";
//         print_r($data);
// die();
        return view('index',$data);
    }
}
