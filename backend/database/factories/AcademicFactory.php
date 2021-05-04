<?php

namespace Database\Factories;

use App\Models\Academic;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departament;

class AcademicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Academic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'departament_id' => Departament::all()->random()->id,
            'stall' => $this->faker->jobTitle(),
            'employee_number' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'employee_phone' => $this->faker->phoneNumber(),
            'salary_min' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'salary_max' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'date_of_admission' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'employee_code' => $this->faker->numberBetween($min = 1000, $max = 9000),
        ];
    }
}
