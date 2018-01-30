<?php

use Illuminate\Database\Seeder;
USE App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
        [
        	'name' => 'leo',
        	'last_name' => 'chaparro',
        	'email' => 'leo@gmail.com',
        	'user' => 'leochaparro',
        	'password' => \Hash::make('leo12345'),
        	'type' => 'admin',
        	'active' => 1,
        	'address' => 'Cerro Real Km57 Caacupe',
        	'created_at' => New DateTime,
        	'updated_at' => New DateTime
        ],
        [
        	'name' => 'gabriel',
        	'last_name' => 'chaparro',
        	'email' => 'gabriel@gmail.com',
        	'user' => 'gabrielchaparro',
        	'password' => \Hash::make('gab12345'),
        	'type' => 'user',
        	'active' => 1,
        	'address' => 'Cerro Real Ruta 2 Km57 Caacupe',
        	'created_at' => New DateTime,
        	'updated_at' => New DateTime

        ],
    	);

    	User::insert($data);
    }
}
