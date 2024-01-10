<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nama_kategori' => 'action',
                'keterangan' => 'Genre action'
            ],
            [
                'nama_kategori' => 'fighting',
                'keterangan' => 'Genre fighting'
            ],
            [
                'nama_kategori' => 'fantasy',
                'keterangan' => 'Genre fantasi'
            ],
            [
                'nama_kategori' => 'shooter',
                'keterangan' => 'Genre shooter'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
