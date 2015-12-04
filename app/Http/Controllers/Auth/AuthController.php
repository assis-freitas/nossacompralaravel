<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Auth;
use Hash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    protected $username = 'usu_email';

    protected $redirectTo = '/grupos';

    protected $loginPath  = '/cadastrar';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usu_nome' => 'required|max:255',
            'usu_email' => 'required|email|max:255|unique:tb_usuarios',
            'usu_senha' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'usu_nome' => $data['usu_nome'],
            'usu_email' => $data['usu_email'],
            'usu_senha' => bcrypt($data['usu_senha']),
        ]);
    }

    public function postLogin(Request $request) {
        $field = 'usu_email';

        $pass = $request->input('usu_senha');
        $user = User::where('usu_email', $request->input('usu_email'))->first();


        if (Hash::check($pass, $user->usu_senha))
        {
            Auth::loginUsingId($user->usu_codigo);
            return redirect('/grupos');
        }

        return redirect('/cadastrar')->withErrors([
            'error' => 'Usuário ou senha inválido',
        ]);
    }
}
