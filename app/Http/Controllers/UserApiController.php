<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $allUsers=User::all();
         return response()->json($allUsers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
           User::create([
            "name" =>  $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);
         return response()->json([
        'message' => 'Success',
        'status' => 201,
        
    ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
         return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
         $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
         $user->delete();
          return response()->json([
        'message' => 'Success',
        'status' => 201,
        
    ],201);
    }
}
