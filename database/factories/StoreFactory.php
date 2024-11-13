<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Store::class;

    public function definition(): array
    {
        return [
            'code' => strtoupper(Str::random(10)),
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'phones' => $this->faker->phoneNumber,
            'company_name' =>$this->faker->company,
            'capital'=> $this->faker->numberBetween(10000 , 10000000),
            'address' => $this->faker->address,
            'register_commerce_number' => $this->faker->unique()->numerify('RC######'),
            'nif' => $this->faker->unique()->numerify('NIF########'),
            'legal_form'=>$this->faker->numberBetween(1,5),
            'status' => 1,
            'can_update_preparing_packages' => $this->faker->boolean,
        ];
    }
}
