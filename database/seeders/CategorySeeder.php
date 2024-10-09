<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(5)->create();

        Category::create([
            'name' => $name = 'Web Design',
            'slug' => Str::slug($name),
            'color' => 'red'
        ]);

        Category::create([
            'name' => $name = 'UI UX',
            'slug' => Str::slug($name),
            'color' => 'green'
        ]);

        Category::create([
            'name' => $name = 'Machine Learning',
            'slug' => Str::slug($name),
            'color' => 'blue'
        ]);

        Category::create([
            'name' => $name = 'Data Structure',
            'slug' => Str::slug($name),
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => $name = 'Cyber Security',
            'slug' => Str::slug($name),
            'color' => 'orange'
        ]);
    }
}
