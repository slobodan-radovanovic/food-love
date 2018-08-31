<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('CategoryTableSeeder');
        $this->call('ProductsTableSeeder');
        $this->call('IngredientsTableSeeder');
        $this->call('ProductIngredientTableSeeder');
        $this->call('AdditionsTableSeeder');
        $this->call('CategoryAdditionTableSeeder');
        $this->call('TypesTableSeeder');
        $this->call('ProductTypeTableSeeder');
    }
}
