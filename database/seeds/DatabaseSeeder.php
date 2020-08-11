<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run(){
    $this->call(RolSeeder::class);
    $this->call(InstitucionSeeder::class);
    $this->call(CursoSeeder::class);
    $this->call(TemaSeeder::class);
    $this->call(UsuarioSeeder::class);
    $this->call(TestSeeder::class);
    $this->call(PreguntaSeeder::class);
    $this->call(TemaXTestSeeder::class);
    $this->call(CursoXTestSeeder::class);
  }
}
