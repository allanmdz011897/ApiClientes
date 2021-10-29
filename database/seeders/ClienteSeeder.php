<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
        	[
	        	'dpi' => 123456789,
	        	'name' => 'Allan Mendez',
	        	'email' => 'allanmdz@gmail.com',
                'github' => 'allanmdz011897',
	        	'phone' => 59737374,
        	],
            [
	        	'dpi' => 213456789,
	        	'name' => 'Angel Mendez',
	        	'email' => 'angsmdz@gmail.com',
                'github' => 'angsmdz2004',
	        	'phone' => 42681409,
        	],
            [
	        	'dpi' => 321456789,
	        	'name' => 'Keissi Aguilar',
	        	'email' => 'keissikeller@gmail.com',
                'github' => 'keikellers95',
	        	'phone' => 41223239,
        	],
            [
	        	'dpi' => 412356789,
	        	'name' => 'Yahir Aguilar',
	        	'email' => 'yaimorales@gmail.com',
                'github' => 'yahirmora2002',
	        	'phone' => 55222120,
        	],
            [
	        	'dpi' => 512346789,
	        	'name' => 'katherine Aguilar',
	        	'email' => 'kathasmejias2003@gmail.com',
                'github' => 'kathasa21',
	        	'phone' => 59747471,
        	]
        ]);
    }
}
