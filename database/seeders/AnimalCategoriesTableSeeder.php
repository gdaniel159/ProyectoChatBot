<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        $categories = [
            'Mamíferos',
            'Aves',
            'Reptiles',
            'Anfibios',
            'Peces',
            'Insectos',
            'Arácnidos',
            'Crustáceos',
            'Moluscos',
            'Equinos',
            'Felinos',
            'Caninos',
            'Roedores',
            'Primates',
            'Aves rapaces',
            'Animales marinos',
            'Animales salvajes',
            'Animales domésticos',
            'Animales de granja',
            'Animales en peligro de extinción',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
