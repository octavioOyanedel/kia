<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Grade;
use App\Models\Action;
use App\Models\Battle;
use App\Models\Soldier;
use App\Models\Conflict;
use App\Models\Division;
use App\Models\Regiment;
use App\Models\Battalion;
use Illuminate\Support\Str;
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
		User::factory(4)->create();

		User::create([
            'name' => 'Octavio Oyanedel Alarcón',
            'email' => 'octavio.oyanedel@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
		]);	

		$grados = array ('Soldado','Cabo','Cabo 2°','Cabo 1°','Sargento 2°','Sargento 1°', 'Suboficial', 'Suboficial Mayor', 'Teniente', 'Capitán', 'Mayor', 'Teniente Coronel', 'Coronel', 'General');
		for ($i = 0; $i < count($grados); $i++) { 
			Grade::create([
	            'name' => Str::upper($grados[$i]),
			]);
		}	

		$divisiones = array ('I DIVISIÓN', 'II DIVISIÓN', 'III DIVISIÓN', 'IV DIVISIÓN', 'V DIVISIÓN');
		for ($i = 0; $i < count($divisiones); $i++) { 
			Division::create([
	            'name' => Str::upper($divisiones[$i]),
			]);
		}	

		Battalion::factory(10)->create();		

		Regiment::factory(50)->create();	

		$acciones = array ('KIA', 'WIA', 'MIA', 'POW');
		for ($i = 0; $i < count($acciones); $i++) { 
			Action::create([
	            'name' => Str::upper($acciones[$i]),
	            'description' => 'Pellentesque dignissim cursus tempus. Fusce sit amet sagittis ex, at condimentum ipsum. In at ornare nisl, sit amet bibendum odio. In id erat a mi scelerisque euismod vel rhoncus tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam efficitur elit nec lobortis placerat. Vestibulum tristique est ut sem consequat, eu pretium metus tristique.'
			]);
		}

		Conflict::factory(3)->create();

		Battle::factory(50)->create();	

		Soldier::factory(1000)->create();

		Event::factory(50)->create();	
    }
}