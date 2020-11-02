<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'First Name' => $this->faker->name,
            'Last Name' => $this->faker->name,
            'Email' => $this->faker->unique()->safeEmail,
            'Role_Id' => $this->faker->randomDigit,
            'Program_Id' => $this->faker->randomDigit,
            'remember_token' => Str::random(10),
        ];
    }
}
