<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('comics_db.comics');
        foreach ($products as $product) {
           $new_product = new Comic();
           $new_product->title = $product['title'];
           $new_product->description = $product['description'];
           $new_product->thumb = $product['thumb'];
           $new_product->price = $product['price'];
           $new_product->series = $product['series'];
           $new_product->sale_date = $product['sale_date'];
           $new_product->type = $product['type'];
           $new_product->save();
        }
    }
}
