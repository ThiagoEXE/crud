<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterService extends Controller
{
    public function storeUser(Request $resources){
        $user = new User();
        $user->name = $resources->name;
        $user->email = $resources->email;
        $user->password = $resources->password;
        return $user->save();
    }

    public function searchOneRegister($id){

    }
    public function searchAllRegisters(){
        $list= User::all();
        return $list;
        //paginate
    }

}
