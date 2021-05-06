<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function index()
    {
        $user = User::where("is_public", true)->select("id","name", "surname", "public_slug")->with(["academic:user_id,departament_id", "academic.departament:id,departament"])->get();
        return response()->json([
            "data" => $user
        ], 200);
    }

    public function store(UserRequest $request)
    {
        return $request->all();        
    }

    public function show($slug)
    {
        $user = User::where("public_slug", $slug)->where("is_public", true)->with("academic", "academic.departament", "files")->firstOrFail();
        return response()->json([
            "data" => $user
        ], 200);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
