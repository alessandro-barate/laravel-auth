<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();

        // Assegno valori specifici alle colonne
        $post->content = 'Contenuto';
        $post->slug = 'Slug';

        // Salva il dato in tabella
        $post->save();

    }
}
