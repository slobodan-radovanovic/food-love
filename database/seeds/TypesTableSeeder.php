<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'type_name' => 'Somun 290+g',
                'price' => 'price'
            ], [
                'type_name' => 'Kifla 290+g',
                'price' => 'price2'
            ], [
                'type_name' => 'Tortilja 270+g',
                'price' => 'price3'
            ], [
                'type_name' => '28cm',
                'price' => 'price'
            ], [
                'type_name' => '32cm',
                'price' => 'price2'
            ], [
                'type_name' => 'Limenka 0,33l',
                'price' => 'price'
            ], [
                'type_name' => '0,5l',
                'price' => 'price2'
            ], [
                'type_name' => '1l',
                'price' => 'price3'
            ], [
                'type_name' => '1,5l',
                'price' => 'price4'
            ], [
                'type_name' => '2l',
                'price' => 'price5'
            ]]            );
    }
}
