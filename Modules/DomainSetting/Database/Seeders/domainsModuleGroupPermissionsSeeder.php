<?php

namespace Modules\DomainSetting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class domainsModuleGroupPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('group_permissions')->insert([
            // Technical Support Group Permissions
            ['group_id' => 1, 'permission_id' => 591, 'created_at' => Carbon::now()],
            ['group_id' => 1, 'permission_id' => 592, 'created_at' => Carbon::now()],
            ['group_id' => 1, 'permission_id' => 593, 'created_at' => Carbon::now()],
            ['group_id' => 1, 'permission_id' => 594, 'created_at' => Carbon::now()],
            ['group_id' => 1, 'permission_id' => 595, 'created_at' => Carbon::now()],
         

            // General Manager Group Permissions
            ['group_id' => 2, 'permission_id' => 591, 'created_at' => Carbon::now()],
            ['group_id' => 2, 'permission_id' => 592, 'created_at' => Carbon::now()],
            ['group_id' => 2, 'permission_id' => 593, 'created_at' => Carbon::now()],
            ['group_id' => 2, 'permission_id' => 594, 'created_at' => Carbon::now()],
            ['group_id' => 2, 'permission_id' => 595, 'created_at' => Carbon::now()],
        ]);
    }
}
