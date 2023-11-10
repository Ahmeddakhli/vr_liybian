<?php

namespace Modules\DomainSetting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class domainsModulePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $module_id = DB::table('modules')->where('name','domains Module')->first()->id;

        DB::table('permissions')->insert([
            // Manage domains
            [
                'id' => 591,
                'parent_id' => null,
                'name' => 'Manage domains',
                'slug' => 'manage-domains',
                'is_hidden' => 0,
                'created_at' => Carbon::now(),
                'module_id' => $module_id
            ],
            [
                'id' => 592,
                'parent_id' => 591,
                'name' => 'Index domains',
                'slug' => 'index-domains',
                'is_Hidden' => 0,
                'created_at' => Carbon::now(),
                'module_id' => $module_id
            ],
            [
                'id' => 593,
                'parent_id' => 591,
                'name' => 'Create domains',
                'slug' => 'create-domains',
                'is_Hidden' => 0,
                'created_at' => Carbon::now(),
                'module_id' => $module_id
            ],
            [
                'id' => 594,
                'parent_id' => 591,
                'name' => 'Update domains',
                'slug' => 'update-domains',
                'is_Hidden' => 0,
                'created_at' => Carbon::now(),
                'module_id' => $module_id
            ],
            [
                'id' => 595,
                'parent_id' => 591,
                'name' => 'Delete domains',
                'slug' => 'delete-domains',
                'is_Hidden' => 0,
                'created_at' => Carbon::now(),
                'module_id' => $module_id
            ],           
        ]);
    }
}
