<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        $games =  [
            [
                'id' => 'gb123425',
                'nama' => 'basara',
                'sinopsis' => 'basara adalah serangkaian permainan video yang dikembangkan dan diterbitkan oleh Capcom , dan waralaba media yang lebih besar berdasarkan itu, termasuk tiga acara anime , film anime, pertunjukan aksi langsung , dan berbagai CD drama , novel ringan , manga , dan drama panggung . Kisahnya secara longgar didasarkan pada peristiwa nyata dari periode Sengoku dalam sejarah feodal Jepang ',
                'tahun' => 2006,
                'category_id' => 2,
                'developer' => 'capcom',
                'foto_sampul' => 'basara.jpeg',
            ],
            [
                'id' => 'gb122352',
                'nama' => 'black',
                'sinopsis' => 'Black adalah game FPS yang dikembangkan oleh Criterion Games dan dipublikasikan oleh Electronic Arts pada Februari tahun 2006. Bisa dibilang, ini adalah zaman-zamannya EA masih normal sebelum akhirnya ke Micro-transaction.',
                'tahun' => 2006,
                'category_id' => 4,
                'developer' => 'EA',
                'foto_sampul' => 'black.jpeg',
            ],
            [
                'id' => 'gb123428',
                'nama' => 'DMC',
                'sinopsis' => 'adalah game aksi-petualangan tahun 2001 yang dikembangkan dan diterbitkan oleh Capcom . Dirilis dari bulan Agustus hingga Desember, awalnya untuk PlayStation 2 , ini adalah seri pertama dari seri Devil May Cry . Bertempat di zaman modern di Pulau Mallet fiksi, ceritanya berpusat pada Dante , seorang pemburu iblis yang menggunakan bisnisnya untuk melakukan balas dendam seumur hidup terhadap semua iblis',
                'tahun' => 2001,
                'category_id' => 1,
                'developer' => 'capcom',
                'foto_sampul' => 'dmc.jpeg',
            ],
            [
                'id' => 'gb123431',
                'nama' => 'God Hand',
                'sinopsis' => 'adalah permainan video action beat em up yang dikembangkan oleh Clover Studio dan diterbitkan oleh Capcom untuk konsol permainan PlayStation 2. Permainan ini disutradarai oleh desainer Resident Evil Shinji Mikami, dan dirilis di Jepang dan Amerika Utara pada 2006 dan pada 2007 untuk wilayah PAL',
                'tahun' => 2006,
                'category_id' => 3,
                'developer' => 'clover studio',
                'foto_sampul' => 'gh.jpeg',
            ],
            [
                'id' => 'gb121211',
                'nama' => 'god of war',
                'sinopsis' => 'Dikembangkan oleh studio Santa Monica, alur cerita God of War berfokus pada Kratos, seorang bangsa Sparta yang ingin membalaskan dendam kepada para dewa Olimpus atas kematian keluarganya.',
                'tahun' => 2006,
                'category_id' => 1,
                'developer' => 'santa monica studio',
                'foto_sampul' => 'gow.jpeg',
            ],
            [
                'id' => 'gb121212',
                'nama' => 'GTA SA',
                'sinopsis' => 'Grand Theft Auto: San Andreas adalah game aksi-petualangan tahun 2004 yang dikembangkan oleh Rockstar North dan diterbitkan oleh Rockstar Games . Ini adalah entri utama kelima dalam seri Grand Theft Auto , setelah Grand Theft Auto: Vice City tahun 2002, dan angsuran ketujuh secara keseluruhan. Bertempat pada tahun 1990-an di negara bagian fiksi San Andreas ',
                'tahun' => 2004,
                'category_id' => 1,
                'developer' => 'Rockstar studio',
                'foto_sampul' => 'gta.jpeg',
            ],
            [
                'id' => 'gb121213',
                'nama' => 'Mortal Kombat ',
                'sinopsis' => 'Mortal Kombat: Shaolin Monks adalah petualangan aksi beat-em-up pertempuran video game berdasarkan seri Mortal Kombat pertempuran game. Shaolin Monks dikembangkan oleh Midway LA
                (sebelumnya Paradox Pembangunan) dan diterbitkan oleh Midway untuk PlayStation 2 dan Xbox [1] Hal ini dirilis September 16, 2005 di Amerika Serikat dan 30 September 2005 di Eropa untuk kedua platform.',
                'tahun' => 2005,
                'category_id' => 2,
                'developer' => 'Midway Games',
                'foto_sampul' => 'mk.jpeg',
            ]
        ];
        foreach ($games as $game) {
            Game::create([
                'id' => $game['id'],
                'nama' => $game['nama'],
                'sinopsis' => $game['sinopsis'],
                'tahun' => $game['tahun'],
                'category_id' => $game['category_id'],
                'developer' => $game['developer'],
                'foto_sampul' => $game['foto_sampul'],
            ]);
        }

    }
}
