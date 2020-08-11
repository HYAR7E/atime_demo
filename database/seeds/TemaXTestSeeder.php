<?php

use App\TemaXTest;
use Illuminate\Database\Seeder;

class TemaXTestSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    TemaXTest::create(['tema_id' => 1, 'test_id' => 1]);
    TemaXTest::create(['tema_id' => 2, 'test_id' => 2]);
    TemaXTest::create(['tema_id' => 3, 'test_id' => 3]);
    TemaXTest::create(['tema_id' => 5, 'test_id' => 4]);
    TemaXTest::create(['tema_id' => 5, 'test_id' => 4]);
    TemaXTest::create(['tema_id' => 4, 'test_id' => 5]);
    TemaXTest::create(['tema_id' => 7, 'test_id' => 5]);
    TemaXTest::create(['tema_id' => 8, 'test_id' => 5]);
    TemaXTest::create(['tema_id' => 9, 'test_id' => 5]);
  }
}
