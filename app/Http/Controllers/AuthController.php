<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        try {
            $this->validate($request, [
                'g_name' => ['required', 'string'],
                'email' => ['required', 'email'],
                'password' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
        }

        $user = User::query()
            ->firstOrCreate([
                'email' => $request->get('email'),
                ],[
                    'g_name'=>$request->get('g_name'),
                    'password' => Hash::make($request->get('password')),
            ]);
        if (!$user->wasRecentlyCreated) {
            return response()
            ->json([
                'status'=>0,
                'error'=>[
                    'code'=>1,
                    'message'=>'this email address has been registered.'
                ],
            ]);
    }
        $token = $user->createToken('email');

        return response()
            ->json([
                'status'=>1,
                'data'=>[
                    'token'=>$token->plainTextToken,
                ],
            ]);
    }
    public function  login(Request $request)
    {
        $this->validate($request,[
            'email'=>['required','email'],
            'password' => ['required','string'],
        ]);


        $user = User::query()
            ->where('email','=',$request->get('email'))
            ->first();

        if($user === null || !Hash::check($request->get('password'),$user->password)){
            return response()
                ->json([
                    'status'=>0,
                    'error'=>[
                        'code'=>1,
                        'message'=>'These credentials do not match our records.',
                    ],
                ]);
        }
        $token = $user->createToken('email');

        return Response()
            ->json([
                'status' => 1,
                'data' => [
                    'token' => $token->plainTextToken,
                ],
            ]);
    }
}
