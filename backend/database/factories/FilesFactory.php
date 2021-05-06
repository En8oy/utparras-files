<?php

namespace Database\Factories;

use App\Models\Files;
use App\Models\User;
use App\Models\Document;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Files::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'document_id' => Document::all()->random()->id,
            'url_file' => $this->faker->url
        ];
    }
}
