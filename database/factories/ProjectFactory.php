<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $color = $this->faker->randomElement(Project::getAvailableTextColors());
        $icon = $this->faker->randomElement(Project::getAvailableIcons());

        return [
            'title' => $this->faker->unique()->words(2, true),
            'description' => $this->faker->sentence(),
            'color' => $color,
            'icon_name' => $icon
        ];
    }
}
