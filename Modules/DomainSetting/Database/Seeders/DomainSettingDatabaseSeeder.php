<?php

namespace Modules\DomainSetting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DomainSettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(domainsModuleModuleSeeder::class);
        $this->call(domainsModulePermissionsSeeder::class);
        $this->call(domainsModuleGroupPermissionsSeeder::class);
        $this->call(domainsModuleUserPermissionsSeeder::class);    }
}
