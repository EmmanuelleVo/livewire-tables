<?php

namespace Database\Factories;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'birthdate' => Carbon::make($this->faker->date),
            'favorite_color' => $this->faker->colorName,
            'last_contacted_at' => Carbon::make($this->faker->date),
        ];
    }
}
