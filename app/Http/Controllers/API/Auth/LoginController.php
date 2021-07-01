<?php

namespace App\Http\Controllers\API\Auth;

use App\Model\Preferences;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Register api
     *
     * @param Request $request
     * @return
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'login' => ['required', 'string', 'max:255','unique:user'],
            'pseudo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        Preferences::create();
        $user = User::create([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'login' => $request->get('login'),
            'pseudo' => $request->get('pseudo'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            //'api_token' => Hash::make(Str::random(60)),
        ]);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->pseudo;
        return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            return $this->sendResponse($success, 'User login successfully.');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

    /**
     * Logout API
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }

    public function test (Request $request) {
        return $this->sendResponse(["i'm dumb"],"yes i am");
    }
}
