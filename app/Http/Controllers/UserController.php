<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //menampilkan data user 
    // /
    public function index(){
           $users = User::all();
           return $users;
    }

    public function show($id){
        $user = User::find($id);
        return $user;
    }
    
    public function store(Request $request){

        try {
            $user = new user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            
            return $user;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

       
    }

    public function update(Request $request){
        try {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        $pesan = "Update User Berhasil";
        return response($pesan,200);

        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }  

    
    public function destroy(Request $request){
        try {
        $user = User::find($request->id);
        $user->delete();
        
        $pesan = "Hapus User Berhasil";
        return response($pesan,200);

        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }
}