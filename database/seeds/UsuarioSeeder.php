<?php

use App\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Usuario::create([
      'id' => 1,
      'nickname' => 'test123',
      'password' => bcrypt('test123test123'),
      'email' => 'test123@test123',
      'rol_id' => '1',
      'institucion_id' => '1',
    ]);
    Usuario::create([
      'id' => 2,
      'nickname' => 'teacher123',
      'password' => bcrypt('teacher123teacher123'),
      'email' => 'teacher123@teacher123',
      'rol_id' => '2',
      'institucion_id' => '1',
    ]);
    Usuario::create([
      'id' => 3,
      'nickname' => 'student123',
      'password' => bcrypt('student123student123'),
      'email' => 'student123@student123',
      'rol_id' => '3',
      'institucion_id' => '1',
    ]);
  }
}
