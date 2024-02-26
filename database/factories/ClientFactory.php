<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'Client_State_ID' => fake()->number(),
            'Client_Name' =>fake()->name(),
            'Client_Description' =>fake()->text(100),
            'Client_Location' =>fake()->text(200),
            'Client_Phone' =>fake()->text(10),
            // 'Client_InscriptionDate' =>fake()->now(),
            // 'Client_SpendedMoney' =>fake()->price(100),
        ];
    }
}
