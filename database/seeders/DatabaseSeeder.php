<?php

use Illuminate\Database\Seeder;
use Database\Seeders\TechnologiesSeeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // Panggil seeder-seeder yang Anda buat di sini
    $this->call([
      TechnologiesSeeder::class,
    ]);
  }
}
