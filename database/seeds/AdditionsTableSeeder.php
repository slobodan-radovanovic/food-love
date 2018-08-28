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
                'addition_name' => 'Plazma (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'Lešnik (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'Orah (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'Badem (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'Kokos (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'Kikiriki (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'Voće (+40din)',
                'addition_price' => '40'
            ], [
                'addition_name' => 'plazma u melku (+50din)',
                'addition_price' => '50'
            ], [
                'addition_name' => 'Kupus',
                'addition_price' => null
            ], [
                'addition_name' => 'Luk',
                'addition_price' => null
            ], [
                'addition_name' => 'Zelena salata',
                'addition_price' => null
            ], [
                'addition_name' => 'Majonez',
                'addition_price' => null
            ], [
                'addition_name' => 'Kečap',
                'addition_price' => null
            ], [
                'addition_name' => 'Kiseli krastavac',
                'addition_price' => null
            ], [
                'addition_name' => 'Senf',
                'addition_price' => null
            ], [
                'addition_name' => 'Pavlaka',
                'addition_price' => null
            ], [
                'addition_name' => 'Tucana paprika',
                'addition_price' => null
            ], [
                'addition_name' => 'Čili',
                'addition_price' => null
            ], [
                'addition_name' => 'Vegeta',
                'addition_price' => null
            ], [
                'addition_name' => 'Kajmak (+30din)',
                'addition_price' => '30'
            ]]
        );
    }
}
