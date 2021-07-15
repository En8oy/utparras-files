<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserRequest;
use App\Models\Academic;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        DB::beginTransaction();
        $user = new User();
        $user->is_public = $request->is_public;
        $user->rol = $request->rol;    
        $user->profession = $request->profession;    
        $user->name = $request->name;    
        $user->surname = $request->surname;
        $user->public_slug = Str::slug($request->profession." ".$request->name." ".$request->surname);
        $user->secret_slug = Hash::make($request->profession." ".$request->name." ".$request->surname);
        $user->birthdate = $request->birthdate;    
        $user->personal_email = $request->personal_email;    
        $user->curp = $request->curp;    
        $user->rfc = $request->rfc;    
        $user->civil_status = $request->civil_status;    
        $user->sexo = $request->sexo;    
        $user->origin = $request->origin;    
        $user->personal_address = $request->personal_address;    
        $user->email = $request->email;    
        $user->status = $request->status;  
        $user->password = Hash::make($request->password);
        if (count($request->family_information) > 0) {
            $user->family_information = json_encode($request->family_information);
        }
        if (count($request->institutions) > 0) {
            $user->institutions = json_encode($request->institutions);
        }
        if (count($request->experiences) > 0) {
            $user->experiences = json_encode($request->experiences);
        }
        if (count($request->skills) > 0) {
            $user->skills = json_encode($request->skills);
        }
        
        $user->save();

        $academic = new Academic();
        if (count($request->internal_experiences) > 0) {
            $academic->internal_experiences = json_encode($request->internal_experiences);
        }
        $academic->user_id = $user->id;
        $academic->departament_id = $request->departament_id;
        $academic->stall = $request->stall;
        $academic->employee_number = $request->employee_number;
        $academic->employee_phone = $request->employee_phone;
        $academic->employee_code = $request->employee_code;
        $academic->salary_min = $request->salary_min;
        $academic->salary_max = $request->salary_max;
        $academic->date_of_admission = $request->date_of_admission;
        $academic->save();

        if ($user->id && $academic->id) {
            DB::commit();
            return response()->json([
                'data' => true,
                'message' => 'El usuario ha sido creado' 
            ], 200);
        }else{
            DB::rollBack();
            return response()->json([
                'data' => false,
                'message' => 'El usuario no ha sido creado' 
            ], 502);
        }

    }

    public function show($slug)
    {
        $user = User::where("public_slug", $slug)->where("is_public", true)->with("academic", "academic.departament", "files")->firstOrFail();
        return response()->json([
            "data" => $user
        ], 200);
    }

    public function update(UserRequest $request, $slug)
    {
        $user = User::where('public_slug', $slug)->first();
        // DB::beginTransaction();
        $user->is_public = $request->is_public;
        $user->rol = $request->rol;    
        $user->profession = $request->profession;    
        $user->name = $request->name;    
        $user->surname = $request->surname;
        $user->public_slug = Str::slug($request->profession." ".$request->name." ".$request->surname);
        $user->secret_slug = Hash::make($request->profession." ".$request->name." ".$request->surname);
        $user->birthdate = $request->birthdate;    
        $user->personal_email = $request->personal_email;    
        $user->curp = $request->curp;    
        $user->rfc = $request->rfc;    
        $user->civil_status = $request->civil_status;    
        $user->sexo = $request->sexo;    
        $user->origin = $request->origin;    
        $user->personal_address = $request->personal_address;    
        $user->email = $request->email;    
        $user->status = $request->status;  
        if($request->password != '' || $request->password != null){
            $user->password = Hash::make($request->password);
        }
        if (count($request->family_information) > 0) {
            $user->family_information = json_encode($request->family_information);
        }
        if (count($request->institutions) > 0) {
            $user->institutions = json_encode($request->institutions);
        }
        if (count($request->experiences) > 0) {
            $user->experiences = json_encode($request->experiences);
        }
        if (count($request->skills) > 0) {
            $user->skills = json_encode($request->skills);
        }
        
        $user->save();

        $academic = Academic::where('user_id', $user->id)->first();
        if (count($request->internal_experiences) > 0) {
            $academic->internal_experiences = json_encode($request->internal_experiences);
        }
        $academic->user_id = $user->id;
        $academic->departament_id = $request->departament_id;
        $academic->stall = $request->stall;
        $academic->employee_number = $request->employee_number;
        $academic->employee_phone = $request->employee_phone;
        $academic->employee_code = $request->employee_code;
        $academic->salary_min = $request->salary_min;
        $academic->salary_max = $request->salary_max;
        $academic->date_of_admission = $request->date_of_admission;
        $academic->save();

        if ($user->id && $academic->id) {
            DB::commit();
            return response()->json([
                'data' => true,
                'message' => 'El usuario ha sido modificado' 
            ], 200);
        }else{
            DB::rollBack();
            return response()->json([
                'data' => false,
                'message' => 'El usuario no ha sido modificado' 
            ], 502);
        }
    }

    public function destroy($id)
    {

    }
}
