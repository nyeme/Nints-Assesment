<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use Apps\User;
class Price extends Controller
{
    function save(Request $req)
    {
        //print_r($req->input());
        $user = new User;
        $user->name =  $req->customer_name;
        $user->address = $req->customer_address;
        $user->email = $req->customer_email;
        echo $user ->save();
    }
}