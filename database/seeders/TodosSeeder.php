<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run(): void {
    // factory(App\Todo::class, 10)->create();
    Todo::factory()->count(5)->create();
  }
}
