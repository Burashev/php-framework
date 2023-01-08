<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\Model;
use App\Core\Validator;

final class RegisterModel extends Model
{
    public string $name;
    public string $surname;
    public string $email;
    public string $password;
    public string $passwordConfirm;

}
