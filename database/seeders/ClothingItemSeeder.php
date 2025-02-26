<?php

namespace Database\Seeders;

use App\Models\ClothingItem;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClothingItemSeeder extends Seeder
{
    public function run()
    {
        $user = User::first() ?? User::factory()->create();

        $items = [
            [
                'name' => 'Blue T-shirt', 'category' => 'Tops', 'color' => 'Blue',
                'size' => 'M', 'brand' => 'Nike', 'material' => 'Cotton', 'season' => 'Summer',
            ],
            [
                'name' => 'Black Jeans', 'category' => 'Bottoms', 'color' => 'Black',
                'size' => 'L', 'brand' => 'Levi’s', 'material' => 'Denim', 'season' => 'All-Season',
            ],
            [
                'name' => 'White Sneakers', 'category' => 'Shoes', 'color' => 'White',
                'size' => '42', 'brand' => 'Adidas', 'material' => 'Leather', 'season' => 'All-Season',
            ],
            [
                'name' => 'Red Hoodie', 'category' => 'Tops', 'color' => 'Red',
                'size' => 'XL', 'brand' => 'Puma', 'material' => 'Polyester', 'season' => 'Winter',
            ],
            [
                'name' => 'Denim Jacket', 'category' => 'Outerwear', 'color' => 'Blue',
                'size' => 'L', 'brand' => 'Wrangler', 'material' => 'Denim', 'season' => 'Winter',
            ],
        ];

        foreach ($items as $item) {
            ClothingItem::create(array_merge(['user_id' => $user->id, 'image' => null], $item));
        }
    }
}
