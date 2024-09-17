<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        // dd($admins->toArray());

        return view('admin-list',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // $data = [
        //     "first_name" => 'test 4',
        //     "last_name" => 'Test User 4',
        //     "email" => 'test04@gmail.com',
        //     "gender" => 'male',
        //     "is_active" => 0,

        // ];

        // Admin::create($data);

        $admin = new Admin();
        $admin->first_name = "Admin";
        $admin->last_name = "adminTest";
        $admin->email = "admin01@gmail.com";
        $admin->is_active = 1;

        $admin->save();
        dd("Admin created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin = Admin::find($id);
        // dd($admin->toArray());
        $admin->first_name = "Admin";
        $admin->last_name = "three";
        $admin->is_active = 1;
        $admin->save();

        dd("Admin created successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        dd('Admin deleted successfully');
    }
}
