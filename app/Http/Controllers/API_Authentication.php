<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use App\Transformers\UserTransformer;

class API_Authentication extends Controller {

    private $avatar;

    public function __construct() {
        $this->avatar = "avatar.jpg";
    }
  
    public function registrasi(Request $request, User $user) {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:8'
        ]);

        $data = $user->create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'avatar'    => $this->avatar,
            'type'      => isset($request->type) ? $request->type : 0,
            'api_token' => Hash::make($request->email),
            'created_at'    => date('Y-m-d H:i:s')
        ]);

        return response()->json(fractal()
            ->item($data)
            ->transformWith(new UserTransformer)
            ->toArray(), 200);
    }

    public function login(Request $request, User $user) {
        $this->validate($request, [
            'email'      => 'required',
            'password'   => 'required|min:8'
        ]);

        if (!Auth::attempt([
            'email'     => $request->email,
            'password'  => $request->password,
            'type'      => isset($request->type) ? $request->type : 0
        ])) {
            return response()->json([
                'error' => 'Invalid Credential'
            ], 401);
        }

        $data = $user->find(Auth::user()->id);
        return fractal()
            ->item($data)
            ->transformWith(new UserTransformer)
            ->toArray();
    }

}
