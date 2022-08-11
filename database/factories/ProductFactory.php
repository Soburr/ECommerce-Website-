<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition()
    {
        return [
            // "user_id" => User::factory(),
            // "title" => "This is a title",
            // "image_path" => "public/storage/iPhone.JPG",
            // "description" => $this->faker->text(),
            // "fee" => $this->faker->randomDigitNotNull(),
            // "publish_at" => $this->faker->dateTimeBetween(),
            // "publish_until" => $this->faker->dateTimeBetween(),
            // "is_published" => $this->faker->boolean(),
            // "category" => $this->faker->randomElement([
            //     "NEW ARRIVALS",
            //     "HOT DEALS",
            //     "BLACK FRIDAY"
            // ]),
        ];
    }
}
