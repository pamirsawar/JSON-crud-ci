<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    public function getUsers()
    {

        $path    = './jsons';
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        $data = [];
        foreach ($files as $file) {
            $user = file_get_contents('./jsons/' . $file);
            $user = json_decode($user, true); // decode the JSON into an associative array
            $user['id'] = str_replace('.json', '', $file);
            $data[] = $user;
        }
        return $data;
    }

    public function create($data)
    {

        $userdata['name'] = $data['name'];
        $userdata['designation'] = $data['designation'];
        $userdata['age'] = $data['age'];
        $userdata['location'] = $data['location'];
        $userdata['joining_date'] = $data['joining_date'];

        $roles = explode(',', $data['roles']);

        $userdata['roles'] = $roles;

        // echo "<pre>";
        // print_r($userdata);
        // die();

        $jsontext = json_encode($userdata);

        $path = './jsons';
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));

        $count = count($files);

        $id = $count + 1;

        if (file_put_contents("./jsons/" . $id . ".json", $jsontext)) {

            return true;
        } else {
            echo "something went wrong";
        }
    }



    function getUser($id)
    {
        $path = './jsons';

        $file = "./jsons/" . $id . ".json";

        $user = file_get_contents($file);
        $data = json_decode($user, true); // decode the JSON into an associative array
        return $data;
    }

    function updateUser($data)
    {

        $userdata['name'] = $data['name'];
        $userdata['designation'] = $data['designation'];
        $userdata['age'] = $data['age'];
        $userdata['location'] = $data['location'];
        $userdata['joining_date'] = $data['joining_date'];

        $roles = explode(',', $data['roles']);

        $userdata['roles'] = $roles;

        // echo "<pre>";
        // print_r($userdata['roles']);
        // die();

        $jsontext = json_encode($userdata);



        if (file_put_contents("./jsons/" . $data['id'] . ".json", $jsontext)) {
            return true;
        }
    }

    function deleteUser($id)
    {

        $file = './jsons/' . $id . ".json";

        if (file_exists($file)) {
            if (!unlink($file)) {
                echo "Error";
            } else {
                return true;
            }
        } else {
            return false;
            // header("location: ./index.php");
        }
    }
}
