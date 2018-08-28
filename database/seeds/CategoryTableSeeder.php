<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Omlet u lepinji'
            ], [
                'category_name' => 'Obrok doručak'
            ], [
                'category_name' => 'Sendviči'
            ], [
                'category_name' => 'Komplet lepinja'
            ], [
                'category_name' => 'Čorba'
            ], [
                'category_name' => 'Hrono ishrana'
            ], [
                'category_name' => 'Pice'
            ], [
                'category_name' => 'Salate'
            ], [
                'category_name' => 'Paste'
            ], [
                'category_name' => 'Burgeri'
            ], [
                'category_name' => 'Obroci'
            ], [
                'category_name' => 'Roštilj u lepinji'
            ], [
                'category_name' => 'Slatke palačinke'
            ], [
                'category_name' => 'Slane palačinke'
            ], [
                'category_name' => 'Fit cup 0,3'
            ], [
                'category_name' => 'Pomfrit'
            ], [
                'category_name' => 'Pića'
            ]]            );

}
}
