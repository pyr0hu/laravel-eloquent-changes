<?php

namespace Pyr0hu\EloquentChanges\Tests\Support\Factory;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'email' => $this->faker->email,
            'age' => $this->faker->numberBetween(6, 80),
            'name' => $this->faker->userName,
        ];
    }
}
