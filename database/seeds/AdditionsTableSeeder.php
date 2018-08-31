<?php

use Illuminate\Database\Seeder;

class AdditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('additions')->insert(
            [[
                'addition_name' => 'plazma (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'lešnik (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'orah (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'badem (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'kokos (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'kikiriki (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'voće (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'plazma u melku (+50din)',
                'addition_price' => '50'
            ], [
                'addition_name' => 'kupus',
                'addition_price' => null
            ], [
                'addition_name' => 'luk',
                'addition_price' => null
            ], [
                'addition_name' => 'zelena salata',
                'addition_price' => null
            ], [
                'addition_name' => 'majonez',
                'addition_price' => null
            ], [
                'addition_name' => 'kečap',
                'addition_price' => null
            ], [
                'addition_name' => 'kiseli krastavac',
                'addition_price' => null
            ], [
                'addition_name' => 'senf',
                'addition_price' => null
            ], [
                'addition_name' => 'pavlaka',
                'addition_price' => null
            ], [
                'addition_name' => 'tucana paprika',
                'addition_price' => null
            ], [
                'addition_name' => 'čili',
                'addition_price' => null
            ], [
                'addition_name' => 'vegeta',
                'addition_price' => null
            ], [
                'addition_name' => 'kajmak (+30din)',
                'addition_price' => '30'
            ]]
        );
    }
}
