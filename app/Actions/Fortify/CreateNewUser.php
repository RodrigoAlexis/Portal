<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:45'],
            'paterno' => ['required', 'string', 'max:45'],
            'materno' => ['required', 'string', 'max:45'],
            'telefono' => ['required', 'size:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'clave_cliente' => ['sometimes','max:12'],
            'rfc' => ['sometimes','max:13'],
            'razon_social' => ['sometimes','max:255'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'paterno' => $input['paterno'],
            'materno' => $input['materno'],
            'telefono' => $input['telefono'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'isClient' => $input['isClient'],
            'clave_cliente' => $input['clave_cliente'],
            'rfc' => $input['rfc'],
            'razon_social' => $input['razon_social']
        ]);
    }
}
