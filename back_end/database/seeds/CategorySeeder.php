<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Category;
        $role->name = "Pangan";
        $role->save();

        $role = new Category;
        $role->name = "Sandang";
        $role->save();

        $role = new Category;
        $role->name = "Papan";
        $role->save();

        $role = new Category;
        $role->name = "Jasa";
        $role->save();

        $role = new Category;
        $role->name = "Lainnya";
        $role->save();
    }
}
