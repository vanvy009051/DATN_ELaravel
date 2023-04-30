<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function forgot()
    {
        $credentials = request()->validate(['email' => 'require|email']);

        Password::sendResetLink($credentials);

        return $this->respondWithMessage("Reset password link was sent on your email successfully!");
    }

    public function reset()
    {
        $credentials = request()->validate([
            'email' => 'require|email',
            'password' => 'require|string|max:25|confirmed',
            'token' => 'require|string'
        ]);

        $email_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = $password;
            $user->save();
        });

        if ($email_password_status == Password::INVALID_TOKEN) {
            return $this->respondBadRequest(ApiCode::INVALID_RESET_PASSWORD_TOKEN);
        }

        return $this->respondWithMessage("Password successfully changed");
    }
}
