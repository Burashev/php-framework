<?php
declare(strict_types=1);

namespace App\Models;

use Den\DB\Model;

final class User extends Model
{
    public array $fillable = ['name', 'surname', 'email', 'password'];
    public function getTable(): string
    {
        return "users";
    }
}
