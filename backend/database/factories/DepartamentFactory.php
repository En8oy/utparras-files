<?php

namespace Database\Factories;

use App\Models\Departament;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartamentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Departament::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "departament" => $this->faker->bs(),
            "profession" => $this->faker->suffix(),
            "name" => $this->faker->firstName($gender = null),
            "surname" => $this->faker->lastName(),
            "email_responsable" => $this->faker->email(),
            "phone_departament" => $this->faker->phoneNumber(),
            "responsibilities" => $this->faker->text($maxNbChars = 200),
        ];
    }
}
