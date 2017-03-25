<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->name = "Dekopinda";
        $role->save();

        $role = new Role;
        $role->name = "Dekopinwil";
        $role->save();

        $role = new Role;
        $role->name = "Eksportir";
        $role->save();

        $role = new Role;
        $role->name = "Investor";
        $role->save();

        $role = new Role;
        $role->name = "ICT";
        $role->save();

        $role = new Role;
        $role->name = "Konsultan";
        $role->save();

        $role = new Role;
        $role->name = "Koperasi";
        $role->save();

        $role = new Role;
        $role->name = "Perguruan Tinggi";
        $role->save();

        $role = new Role;
        $role->name = "Industri";
        $role->save();
    }
}
