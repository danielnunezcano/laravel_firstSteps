<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        $professions = DB::select('SELECT id FROM professions WHERE title = ? LIMIT 0,1', ['Desarrolador back-end']);

//        $profession = DB::table('professions')->select('id')->first();
//
//        dd($profession);

        $profession = $this->getProfession();

        DB::table('users')->insert([
            'name' => 'Duilio Palacios',
            'email' => 'duilio@styde.net',
            'password' => bcrypt('laravel'),
            'profession_id' => $profession
        ]);
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        $profession = DB::table('professions')->where('title', 'Desarrolador back-end')->value('id');
        return $profession;
    }
}
