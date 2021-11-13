<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    protected $model=Card::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                          
            'name' => $this->faker->name(),
            'desk_list_id' => DeskList::inRandomOrder()->first()->id
      
        ];
    }
}
