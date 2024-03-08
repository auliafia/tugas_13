<?php

namespace App\Http\Controllers;

use App\Models\CrudUsers;
use Illuminate\Http\Request;

class CrudUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = CrudUsers::all();
        return response()->json(['data' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new CrudUsers();
        $user->name = $request->input('name');
        $user->alamat = $request->input('alamat');
        $user->email = $request->input('email');
        // tambahkan atribut lain sesuai kebutuhan
        $user->save();

        return response()->json(['message' => 'User created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrudUsers  $crudUsers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = CrudUsers::find($id);
        return response()->json(['data' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrudUsers  $crudUsers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = CrudUsers::find($id);
        $user->nama = $request->input('nama');
        $user->alamat = $request->input('alamat');
        $user->email = $request->input('email');
        // tambahkan atribut lain sesuai kebutuhan
        $user->save();

        return response()->json(['message' => 'User updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrudUsers  $crudUsers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = CrudUsers::find($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
}
