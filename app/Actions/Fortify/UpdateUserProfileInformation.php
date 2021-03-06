<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:45'],
            'paterno' => ['string', 'max:45'],
            'materno' => ['string', 'max:45'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            // 'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'telefono' => ['size:10'],
            'razon_social' => ['max:255'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'paterno' => $input['paterno'],
                'materno' => $input['materno'],
                'email' => $input['email'],
                'telefono' => $input['telefono'],
                'isClient' => $input['isClient'],
                'razon_social' => $input['razon_social'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'paterno' => $input['paterno'],
            'materno' => $input['materno'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'telefono' => $input['telefono'],
            'isClient' => $input['isClient'],
            'razon_social' => $input['razon_social'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
