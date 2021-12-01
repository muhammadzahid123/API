<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    function list(Request $req)
    {
        // return $id?Device::find($id):Device::all();
        return ["result"=>"data is saved"];

        // $device = new Device;
        // $device ->name = $req->name;
        // $device ->email = $req->email;
        // $result = $device->save();
        // if($result)
        // {
        //     return ["result"=>"data has been saved"];
        // }
        // else
        // {
        //     return ["result"=>"operation failed"];

        // }
        // return ["result"=>"data is saved"];

    }
}

