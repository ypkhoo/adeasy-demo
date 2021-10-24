<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role; 
use Illuminate\Support\Facades\DB; 

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::factory()->times(20)->create(); 

        DB::table('roles')->insert([
            'name' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'Media Owner'
        ]);

        DB::table('roles')->insert([
            'name' => 'Advertiser'
        ]);
    }
}
