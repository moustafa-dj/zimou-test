<?php

namespace Database\Factories;

use App\Models\Commune;
use App\Models\DeliveryType;
use App\Models\Package;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Package::class;

    public function definition(): array
    {

        $communeIds = Commune::pluck('id')->toArray();
        $deliveryTypeIds = DeliveryType::pluck('id')->toArray();
        $statusIds = Status::pluck('id')->toArray();
    
        return [
            'uuid' => (string) Str::uuid(),
            'tracking_code' => strtoupper(Str::random(10)),
            'commune_id' => $this->faker->randomElement($communeIds),
            'delivery_type_id' => $this->faker->randomElement($deliveryTypeIds),
            'status_id' => $this->faker->randomElement($statusIds),
            'address' => $this->faker->address,
            'can_be_opened' => $this->faker->boolean,
            'name' => $this->faker->word,
            'client_first_name' => $this->faker->firstName,
            'client_last_name' => $this->faker->lastName,
            'client_phone' => $this->faker->phoneNumber,
            'client_phone2' => $this->faker->optional()->phoneNumber,
            'cod_to_pay' => $this->faker->randomFloat(2, 0, 1000),
            'commission' => $this->faker->randomFloat(2, 0, 50),
            'status_updated_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'delivered_at' => $this->faker->optional()->dateTimeBetween('-1 month', 'now'),
            'delivery_price' => $this->faker->randomFloat(2, 5, 100),
            'extra_weight_price' => $this->faker->numberBetween(0, 50),
            'free_delivery' => $this->faker->boolean,
            'packaging_price' => $this->faker->numberBetween(0, 20),
            'partner_cod_price' => $this->faker->randomFloat(2, 0, 100),
            'partner_delivery_price' => $this->faker->numberBetween(0, 100),
            'partner_return' => $this->faker->randomFloat(2, 0, 50),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'price_to_pay' => $this->faker->randomFloat(2, 0, 500),
            'return_price' => $this->faker->numberBetween(0, 50),
            'total_price' => $this->faker->randomFloat(2, 10, 1000),
            'weight' => $this->faker->numberBetween(1000, 5000),
        ];
    }
}
