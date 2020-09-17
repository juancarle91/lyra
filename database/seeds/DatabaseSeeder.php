<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'j.ignaciocarlee@gmail.com',
            'name' => 'Juani',
            'password' => bcrypt('asd123'),
        ]);
        $this->call(SlideSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ProductoSeeder::class);
        //$this->call(NovedadSeeder::class);
    }
}
