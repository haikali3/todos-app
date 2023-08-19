<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run(): void {
    // factory(App\Todo::class, 10)->create();
    Seeder::factory(App\Todo::class, 10)
      ->create();
  }
}
