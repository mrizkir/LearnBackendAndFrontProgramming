<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::all();

        $response = ['status'=>1,
                    'message'=>'fetch data user sudah berhasil di peroleh',
                    'user'=>$user];

        return Response()->json($response);
    }
    public function store(Request $request)
    {
        //menampilkan seluruh isi form
        // dd($request->all());

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>Hash::make($password),
        ]);

        $response = ['status'=>1,
                    'message'=>'user sudah berhasil di inputkan',
                    'user'=>$user];

        return Response()->json($response);
    }
    public function update (Request $request, $id)
    {
        $user = User::find($id);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        $user->name=$name;
        $user->email=$email;
        $user->password=$password;

        $user->save();

        $response = ['status'=>1,
                    'message'=>'user sudah berhasil di ubah',
                    'user'=>$user];

        return Response()->json($response);
    }
    public function destroy (Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        $response = ['status'=>1,
                    'message'=>'user sudah berhasil di hapus'];

        return Response()->json($response);
    }
}
