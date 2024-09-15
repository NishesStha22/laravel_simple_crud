<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create(){
        $data = [
            "name" => 'test 4',
            "username" => 'Test User 4',
            "email" => 'test04@gmail.com',
            "password" => '123456',
            "gender" => 'male',
            "phone" => 123456789,
            "status" => 1,
            "created_at" => now(),
            "updated_at" => now(),
        ];

        DB::table('users')->insert($data);
        dd("user created successfully");

    }

    public function list(){
        $users = DB::table('users')->get();
        return view('user-list',compact('users'));
        // dd($users->toArray());
    }

    public function update(){
        $data = [
            "name" => 'test2',
            "username" => 'Test User2',
            "email" => 'test02@gmail.com',
            "password" => '123456',
            "gender" => 'female',
            "phone" => 123456789,
            "status" => 1,
            "updated_at" => now(),
        ];

        DB::table('users')->where('id',2)->update($data);



    }

    public function delete(){
        DB::table('users')->where('status',1)->delete();
        dd("user deleted successfully");

    }

}
