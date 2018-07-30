<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      DB::table('languages')->insert([
          'name' => 'all',
          'abbr' => 'all',
          'flag' => '',
          'status'=>'A'
      ]);

        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'David Alvarez',
            'email' => 'alvarez@gmail.com',
            'password' => bcrypt('secret'),
            'language_id' => 1,
            'privilege' => 'administrador',
            'status'=>'A'
        ]);

    }
}
