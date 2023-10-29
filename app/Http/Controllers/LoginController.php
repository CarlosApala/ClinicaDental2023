<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function loginUser(Request $request)
    {
        //
        
        $data=$request->json()->all();

        $email=$data['email'];
        $password=$data['password'];

        $usuario=Usuarios::where('email',$email)->first();

        if (!$usuario) {
            return response()->json([
                'data' => null,
                'status' => 400,
                'message' => 'Usuario no encontrado',
            ]);
        }

        if(!password_verify($password,$usuario->password)){
            return response()->json( [
                'data'=>null,
                'status'=>'400',
                'message'=>'incorrecto'
            ]);
        }

        $data = [
            'data' => [
                'token' => auth()->attempt(['email','password']), // Generar un UUID usando el Helper Str
                'user' => [
                    'email' =>$usuario->email,
                    'username' => $usuario->name,
                ],
            ],
            'message' => 'success',
            'status' => 200,
        ];

        return response()->json($data);



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
