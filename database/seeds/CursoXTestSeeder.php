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
    CursoXTest::create(['curso_id' => 1, 'test_id' => 1]);
    CursoXTest::create(['curso_id' => 2, 'test_id' => 2]);
    CursoXTest::create(['curso_id' => 3, 'test_id' => 3]);
    CursoXTest::create(['curso_id' => 4, 'test_id' => 4]);
    CursoXTest::create(['curso_id' => 5, 'test_id' => 5]);
    CursoXTest::create(['curso_id' => 5, 'test_id' => 5]);
    CursoXTest::create(['curso_id' => 5, 'test_id' => 5]);
    CursoXTest::create(['curso_id' => 5, 'test_id' => 5]);
  }
}
