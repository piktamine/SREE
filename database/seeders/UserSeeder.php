<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'admin',
            'api_token' => Str::random(60),
            'rpe' => '999999',
            'email' => 'adminprueba@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('superu');//Dato falso super usuario
    
        User::create([
            'name' => 'juan espinoza',
            'api_token' => Str::random(60),
            'rpe' => '155551',
            'email' => 'je@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('capturista');//Dato falso super capturista
        
        User::create([
            'name' => 'Beto Martinez',
            'api_token' => Str::random(60),
            'rpe' => '155552',
            'email' => 'bm@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('sinodal');//Dato falso super jefe area
        
        User::create([
            'name' => 'Erick corpus',
            'api_token' => Str::random(60),
            'rpe' => '155553',
            'email' => 'ec@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('jefearea');//Dato falso sinodal
        
        User::create([
            'name' => 'Angie Vazquez',
            'api_token' => Str::random(60),
            'rpe' => '155554',
            'email' => 'av@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('coordinador');//Dato falso coordinador
        
        //Usuarios extra
        User::create([
            'name' => 'Valeria',
            'api_token' => Str::random(60),
            'rpe' => '155501',
            'email' => 'v@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('sinodal');
        User::create([
            'name' => 'Maria',
            'api_token' => Str::random(60),
            'rpe' => '155502',
            'email' => 'm@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('sinodal');
        User::create([
            'name' => 'Angelica',
            'api_token' => Str::random(60),
            'rpe' => '155503',
            'email' => 'aa@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('sinodal');
        User::create([
            'name' => 'Veronica',
            'api_token' => Str::random(60),
            'rpe' => '155504',
            'email' => 'vv@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('sinodal');
        User::create([
            'name' => 'Cinthia',
            'api_token' => Str::random(60),
            'rpe' => '155505',
            'email' => 'cg@uaslp.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('sinodal');
    }
}
