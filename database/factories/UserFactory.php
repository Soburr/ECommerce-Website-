<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

class UserFactory extends Factory
{

    public function definition()
    {
        return [
            // 'name' => "Adewunmi",
            // 'email' => "Adewunmi@gmail.com",
            // 'email_verified_at' => now(),
            // 'password' => bcrypt("12345678"),
            // 'remember_token' => Str::random(10),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
