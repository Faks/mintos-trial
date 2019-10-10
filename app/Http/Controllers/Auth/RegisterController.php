<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use function event;
use function is_int;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    
    use RegistersUsers;
    
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'   => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    protected function create(array $data) : ?Model
    {
        try {
            if (request()->has('email') === true) {
                $model = User::where(['email' => $data['email']])->firstOrFail();
            } else {
                $model = User::updateOrCreate($this->attributes($data));
            }
        } catch (ModelNotFoundException $exception) {
            $model = User::updateOrCreate($this->attributes($data));
        }
        
        return $model;
    }
    
    /**
     * @param array $data
     * @return array
     */
    protected function attributes($data) : array
    {
        return [
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'email'      => $data['email'],
            'password'   => Hash::make($data['password']),
        ];
    }
    
    /**
     * Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $errors = $this->validator($request->all());
        
        if ($errors->passes()) {
            $user = $this->create($request->all());
            event(new Registered($user));
            $user = $user->id;
        } else {
            $user = [];
        }
        
        return response()->json([
            'errors' => $errors->errors()->all(),
            'data'   => [
                'model' => is_int($user),
            ],
        ]);
    }
}
