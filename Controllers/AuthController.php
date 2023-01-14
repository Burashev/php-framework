<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Validator;
use App\Models\User;

final class AuthController extends Controller
{
    public function login()
    {
        return $this->render('login');
    }

    public function handleLogin()
    {
        return "handle";
    }

    public function register()
    {
        return $this->render('register');
    }

    public function handleRegister(Request $request)
    {
        $data = $request->input();
        $validator = new Validator($data);

        $errors = $validator->validate([
            'name' => [Validator::RULE_REQUIRED],
            'surname' => [Validator::RULE_REQUIRED],
            'email' => [Validator::RULE_REQUIRED, Validator::RULE_EMAIL],
            'password' => [Validator::RULE_REQUIRED, [Validator::RULE_SAME, ['same' => 'passwordConfirm']], [Validator::RULE_MIN, ["min" => 8]], [Validator::RULE_MAX, ["max" => 16]]],
            'passwordConfirm' => [Validator::RULE_REQUIRED],
        ]);

        if ($validator->validated()) {
            $user = User::query()->create(
                ['password' => password_hash($data['password'], PASSWORD_BCRYPT)] + $data
            );

            Application::$app->response->redirect('/');
        }

        return "error";
    }
}
