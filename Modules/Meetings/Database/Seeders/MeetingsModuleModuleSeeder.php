<?php

namespace Modules\Meetings\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class MeetingsModuleModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('modules')->insert([
            'name' => 'Meetings Module',
            'description' => 'Meetings Module',
        ]);
        
        $module = DB::table('modules')->where('name', 'Meetings Module')->first();
        $package = DB::table('packages')->first();
        DB::table('package_modules')->insert([
            'package_id' => $package->id,
            'module_id' => $module->id
        ]);
    }
}
