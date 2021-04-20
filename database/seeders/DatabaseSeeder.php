<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProfesorSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(KardexSeeder::class);
        $this->call(CuestionarioSeeder::class);
        
        //factory(User::class,10)->create()->assignRole('sinodal');
    }
}
