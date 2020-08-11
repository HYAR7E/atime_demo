<?php

use App\CursoXTest;
use Illuminate\Database\Seeder;

class CursoXTestSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    CursoXTest::create(['curso_id' => 1, 'test_id' => 1]);
    CursoXTest::create(['curso_id' => 2, 'test_id' => 1]);
    CursoXTest::create(['curso_id' => 3, 'test_id' => 2]);
    CursoXTest::create(['curso_id' => 11, 'test_id' => 3]);
    CursoXTest::create(['curso_id' => 12, 'test_id' => 4]);
    CursoXTest::create(['curso_id' => 7, 'test_id' => 5]);
    CursoXTest::create(['curso_id' => 8, 'test_id' => 5]);
    CursoXTest::create(['curso_id' => 10, 'test_id' => 5]);
    CursoXTest::create(['curso_id' => 13, 'test_id' => 5]);
  }
}
