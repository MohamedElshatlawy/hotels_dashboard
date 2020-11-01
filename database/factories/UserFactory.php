<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            //
            "national_id"=>$this->faker->uuid,
            "name"=>$this->faker->name(),
            "phone"=>$this->faker->phoneNumber,
            "address"=>$this->faker->address,
            "email"=>$this->faker->email,
            "password"=>$this->faker->password

        ];
    }
}
