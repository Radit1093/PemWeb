<?php

  namespace Database\Seeders;

  use App\Models\Genre;
  use Illuminate\Database\Seeder;

  class GenreSeeder extends Seeder
  {
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Genre::factory()
        ->count(10)
        ->create()
        ->each(function ($genre) {
          if (!Genre::where('name', $genre->name)->exists()) {
            $genre->save();
          }
        });
    }
  }