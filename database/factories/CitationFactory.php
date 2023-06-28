<?php

namespace Database\Factories;

use App\Models\Citation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citation>
 */
class CitationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'citation' => $this->faker->realText($maxNbChars = 50, $indexSize = 5),
            'explication' => $this->faker->realText($maxNbChars = 200, $indexSize = 5),
            'created_at' => now(),
            'updated_at' => now(),
            'author_id' => $this->faker->numberBetween(1,15)
        ];
    }
}
