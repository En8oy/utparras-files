<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
        $name = $this->faker->name();
        $surname = $this->faker->lastName();
        $profession = $this->faker->suffix();

        return [
            //Control
            'public_slug' => Str::slug($profession." ".$name ." ". $surname),
            'secret_slug' => Hash::make($profession." ".$name ." ". $surname),
            'is_public' => $this->faker->randomElement([true, false]),
            'rol' => $this->faker->randomElement(['Administrador', 'Administrativo', 'Profesor']),
            //Personal
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'profession' => $profession,
            'name' => $name,
            'surname' => $surname,
            'birthdate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'personal_email' => $this->faker->email(),
            'curp' => $this->faker->creditCardNumber(),
            'rfc' => $this->faker->creditCardNumber(),
            'origin' => $this->faker->city(),
            'civil_status' => $this->faker->randomElement(["Soltero", "Casado", "Viudo", "Union Libre", "Divorciado", "Separación En Proceso", "Concubinato"]),
            'sexo' => $this->faker->randomElement(["Hombre", "Mujer"]),
            //Address
            'personal_address' => $this->faker->address(),
            'place_of_birth' => $this->faker->address(),

            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'status' => $this->faker->randomElement(['Activo', 'Inactivo'])
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
