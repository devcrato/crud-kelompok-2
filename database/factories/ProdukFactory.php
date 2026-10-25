<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_produk' => fake()->unique()->numerify('####'),
            'nama_produk' => fake()->words(3, true),
            'kategori' => fake()->randomElement(['Elektronik', 'Pakaian', 'Makanan', 'Minuman']),
            'merek' => fake()->company(),
            'harga' => fake()->numberBetween(10000, 5000000),
            'stok' => fake()->numberBetween(1, 100),
            'keterangan' => fake()->sentence(),
        ];
    }
}
