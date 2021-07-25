<?php

use App\Trimestre;
use Illuminate\Database\Seeder;

class TrimestreSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Trimestre::create(['id' => 1, 'numero' => '1', 'year' => '2021']);
    Trimestre::create(['id' => 2, 'numero' => '2', 'year' => '2021']);
    Trimestre::create(['id' => 3, 'numero' => '3', 'year' => '2021']);
  }
}
