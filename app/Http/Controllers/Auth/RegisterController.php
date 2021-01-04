<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Rules\ReCAPTCHAv3;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if($data['documento_cpf'] != null)
        {
            return Validator::make($data, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required',
                'min:8',
                'regex:"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"',
                'confirmed'],
                'documento_cpf' => ['required','cpf','unique:users,documento'],
                'agree' => ['required'],
                // 'grecaptcha' => ['required', new ReCAPTCHAv3]
            ]);

        } elseif ($data['documento_cnpj'] != null)
        {
            return Validator::make($data, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required',
                'min:8',
                'regex:/"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"/',
                'confirmed'],
                'documento_cnpj' => ['required', 'cnpj', 'unique:users,documento'],
                'agree' => ['required'],
                // 'grecaptcha' => ['required', new ReCAPTCHAv3]
            ]);
        }

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if($data['documento_cpf'] != null)
        {
            $nome = $data['name_pessoa'];
            $documento = $data['documento_cpf'];

        } elseif ($data['documento_cnpj'] != null)
        {
            $nome = $data['name_empresa'];
            $documento = $data['documento_cnpj'];
        }

        return User::create([
            'name' => $nome,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'documento' => $documento,
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', $data['data_nascimento']),
            'inscricao_estadual' => $data['inscricao_estadual'],
            'telefone' => $data['telefone'],
            'termos_condicoes' => \Carbon\Carbon::now(),
            'tipo' => $data['tipo'],
            'status' => 1,
        ]);
    }
}
