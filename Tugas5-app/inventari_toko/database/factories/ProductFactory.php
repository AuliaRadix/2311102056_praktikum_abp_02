<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sembakoNames = [
            'Beras Putih', 'Beras Merah', 'Gula Pasir', 'Minyak Goreng Sawit', 
            'Minyak Goreng Kelapa', 'Telur Ayam Ras', 'Telur Ayam Kampung', 
            'Susu Kental Manis', 'Susu Bubuk', 'Garam Beryodium', 
            'Tepung Terigu Segitiga Biru', 'Tepung Tapioka', 'Daging Sapi Segar', 
            'Daging Ayam Broiler', 'Bawang Merah', 'Bawang Putih', 
            'Cabai Merah Keriting', 'Cabai Rawit Merah', 'Mie Instan Kuah', 
            'Mie Instan Goreng', 'Kecap Manis', 'Saus Sambal', 
            'Kopi Hitam Bubuk', 'Teh Celup', 'Margarin'
        ];

        return [
            'name' => $this->faker->randomElement($sembakoNames),
            'price' => $this->faker->randomFloat(2, 5000, 150000), // Adjusted price for Rupiah logically (though we formatted with Rp but kept the decimal earlier, we can just use whole numbers for Rp)
            'stock' => $this->faker->numberBetween(10, 200),
            'description' => $this->faker->sentence(8),
        ];
    }
}
