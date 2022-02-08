<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    public function getUser(){

        $path    = './jsons';
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        $data=[];
        foreach ($files as $file) {
            $user = file_get_contents('./jsons/' . $file);
            $user = json_decode($user, true); // decode the JSON into an associative array
            $user['id']=str_replace('.json', '', $file);
            $data[]=$user;
        }
        return $data;
    }
}