<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;


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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'first_name' => ['required', 'string', 'max:32'],
            'last_name' => ['required', 'string', 'max:32'],
            'auth_level' => ['exists:ruoli,id'],
            'location' => ['string', 'max:64'],
            'birth_date' => ['date'],
            'occupation' => ['exists:occupazioni,occupazione'],
            'username' => ['required', 'string', 'max:32', 'unique:users,username'],

            'email' => ['string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function registerUser(Request $request)
    {
        $inputdata=array_merge($request->all(),['auth_level'=>2]);
        $validator=self::validator($inputdata);
        if($validator->fails()){
            return redirect()->route('catalogo')->withErrors($validator);
        }
        $user = User::createUser($inputdata);
        if ($user === null) {
            return redirect()->route('catalogo')->with('messages',[['title'=>'Registrazione fallita','type'=>'error','message'=>'Non è stato possibile registrare l\'utente']]);
        }
        // Auth::login($user);
        return redirect()->route('catalogo')->with('messages',[['title'=>'Registrazione effettuata','type'=>'success','message'=>'Utente registrato correttamente']/*,['title'=>'Log-in Effettuato','type'=>'success','message'=>'Log-in effettuato correttamente']*/]);
    }

}
