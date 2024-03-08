<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiuserController extends ApiController
{
    public function index(Request $request)
    {
        $userList = []; //ambil data dari database
        return $this->sendSuccess($userList);
    }
    public function show(Request $request, $id)
    {
    }
    public function store(Request $request)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy(Request $request, $id)
    {
    }
}