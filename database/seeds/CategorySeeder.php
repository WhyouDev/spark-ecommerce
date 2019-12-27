<?php

use Illuminate\Database\Seeder;
use App\Models\CategoriesModel;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new CategoriesModel();
        $category->categories_id       = "1";
        $category->categories_name     = "Electronics";
        $category->save();
    }
}
