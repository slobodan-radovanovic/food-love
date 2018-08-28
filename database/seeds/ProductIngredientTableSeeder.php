<?php

use Illuminate\Database\Seeder;

class ProductIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_ingredient')->insert(
            [[
                'product_id' => '1',
                'ingredient_id' => '1'
            ], [
                'product_id' => '1',
                'ingredient_id' => '2'
            ], [
                'product_id' => '1',
                'ingredient_id' => '3'
            ], [
                'product_id' => '1',
                'ingredient_id' => '4'
            ], [
                'product_id' => '1',
                'ingredient_id' => '5'
            ], [
                'product_id' => '2',
                'ingredient_id' => '1'
            ], [
                'product_id' => '2',
                'ingredient_id' => '6'
            ], [
                'product_id' => '2',
                'ingredient_id' => '7'
            ], [
                'product_id' => '2',
                'ingredient_id' => '8'
            ], [
                'product_id' => '3',
                'ingredient_id' => '1'
            ], [
                'product_id' => '3',
                'ingredient_id' => '9'
            ], [
                'product_id' => '3',
                'ingredient_id' => '7'
            ], [
                'product_id' => '3',
                'ingredient_id' => '10'
            ], [
                'product_id' => '3',
                'ingredient_id' => '4'
            ], [
                'product_id' => '4',
                'ingredient_id' => '1'
            ], [
                'product_id' => '4',
                'ingredient_id' => '11'
            ], [
                'product_id' => '4',
                'ingredient_id' => '7'
            ], [
                'product_id' => '4',
                'ingredient_id' => '9'
            ], [
                'product_id' => '4',
                'ingredient_id' => '4'
            ], [
                'product_id' => '5',
                'ingredient_id' => '1'
            ], [
                'product_id' => '5',
                'ingredient_id' => '12'
            ], [
                'product_id' => '5',
                'ingredient_id' => '10'
            ], [
                'product_id' => '5',
                'ingredient_id' => '13'
            ], [
                'product_id' => '6',
                'ingredient_id' => '1'
            ], [
                'product_id' => '6',
                'ingredient_id' => '6'
            ], [
                'product_id' => '6',
                'ingredient_id' => '14'
            ], [
                'product_id' => '6',
                'ingredient_id' => '4'
            ], [
                'product_id' => '7',
                'ingredient_id' => '3'
            ], [
                'product_id' => '7',
                'ingredient_id' => '15'
            ], [
                'product_id' => '7',
                'ingredient_id' => '16'
            ], [
                'product_id' => '7',
                'ingredient_id' => '17'
            ], [
                'product_id' => '8',
                'ingredient_id' => '18'
            ], [
                'product_id' => '8',
                'ingredient_id' => '19'
            ], [
                'product_id' => '8',
                'ingredient_id' => '20'
            ], [
                'product_id' => '8',
                'ingredient_id' => '4'
            ], [
                'product_id' => '8',
                'ingredient_id' => '17'
            ], [
                'product_id' => '9',
                'ingredient_id' => '21'
            ], [
                'product_id' => '9',
                'ingredient_id' => '19'
            ], [
                'product_id' => '9',
                'ingredient_id' => '20'
            ], [
                'product_id' => '9',
                'ingredient_id' => '4'
            ], [
                'product_id' => '9',
                'ingredient_id' => '17'
            ], [
                'product_id' => '10',
                'ingredient_id' => '21'
            ], [
                'product_id' => '10',
                'ingredient_id' => '4'
            ], [
                'product_id' => '10',
                'ingredient_id' => '5'
            ], [
                'product_id' => '10',
                'ingredient_id' => '22'
            ], [
                'product_id' => '10',
                'ingredient_id' => '16'
            ], [
                'product_id' => '11',
                'ingredient_id' => '4'
            ], [
                'product_id' => '11',
                'ingredient_id' => '20'
            ], [
                'product_id' => '12',
                'ingredient_id' => '4'
            ], [
                'product_id' => '12',
                'ingredient_id' => '20'
            ], [
                'product_id' => '12',
                'ingredient_id' => '12'
            ], [
                'product_id' => '12',
                'ingredient_id' => '23'
            ], [
                'product_id' => '13',
                'ingredient_id' => '24'
            ], [
                'product_id' => '13',
                'ingredient_id' => '20'
            ], [
                'product_id' => '13',
                'ingredient_id' => '25'
            ], [
                'product_id' => '13',
                'ingredient_id' => '12'
            ], [
                'product_id' => '13',
                'ingredient_id' => '26'
            ], [
                'product_id' => '14',
                'ingredient_id' => '27'
            ], [
                'product_id' => '14',
                'ingredient_id' => '20'
            ], [
                'product_id' => '14',
                'ingredient_id' => '28'
            ], [
                'product_id' => '14',
                'ingredient_id' => '3'
            ], [
                'product_id' => '14',
                'ingredient_id' => '29'
            ], [
                'product_id' => '14',
                'ingredient_id' => '30'
            ], [
                'product_id' => '15',
                'ingredient_id' => '27'
            ], [
                'product_id' => '15',
                'ingredient_id' => '20'
            ], [
                'product_id' => '15',
                'ingredient_id' => '28'
            ], [
                'product_id' => '15',
                'ingredient_id' => '29'
            ], [
                'product_id' => '15',
                'ingredient_id' => '30'
            ], [
                'product_id' => '16',
                'ingredient_id' => '27'
            ], [
                'product_id' => '16',
                'ingredient_id' => '20'
            ], [
                'product_id' => '16',
                'ingredient_id' => '28'
            ], [
                'product_id' => '16',
                'ingredient_id' => '29'
            ], [
                'product_id' => '16',
                'ingredient_id' => '30'
            ], [
                'product_id' => '17',
                'ingredient_id' => '27'
            ], [
                'product_id' => '17',
                'ingredient_id' => '20'
            ], [
                'product_id' => '17',
                'ingredient_id' => '28'
            ], [
                'product_id' => '17',
                'ingredient_id' => '3'
            ], [
                'product_id' => '17',
                'ingredient_id' => '29'
            ], [
                'product_id' => '17',
                'ingredient_id' => '30'
            ], [
                'product_id' => '18',
                'ingredient_id' => '27'
            ], [
                'product_id' => '18',
                'ingredient_id' => '20'
            ], [
                'product_id' => '18',
                'ingredient_id' => '28'
            ], [
                'product_id' => '18',
                'ingredient_id' => '29'
            ], [
                'product_id' => '18',
                'ingredient_id' => '31'
            ], [
                'product_id' => '18',
                'ingredient_id' => '30'
            ], [
                'product_id' => '19',
                'ingredient_id' => '27'
            ], [
                'product_id' => '19',
                'ingredient_id' => '20'
            ], [
                'product_id' => '19',
                'ingredient_id' => '28'
            ], [
                'product_id' => '19',
                'ingredient_id' => '29'
            ], [
                'product_id' => '19',
                'ingredient_id' => '30'
            ], [
                'product_id' => '20',
                'ingredient_id' => '32'
            ], [
                'product_id' => '20',
                'ingredient_id' => '33'
            ], [
                'product_id' => '20',
                'ingredient_id' => '20'
            ], [
                'product_id' => '20',
                'ingredient_id' => '30'
            ], [
                'product_id' => '21',
                'ingredient_id' => '4'
            ], [
                'product_id' => '21',
                'ingredient_id' => '34'
            ], [
                'product_id' => '21',
                'ingredient_id' => '2'
            ], [
                'product_id' => '21',
                'ingredient_id' => '3'
            ], [
                'product_id' => '21',
                'ingredient_id' => '5'
            ], [
                'product_id' => '21',
                'ingredient_id' => '16'
            ], [
                'product_id' => '22',
                'ingredient_id' => '4'
            ], [
                'product_id' => '22',
                'ingredient_id' => '34'
            ], [
                'product_id' => '22',
                'ingredient_id' => '2'
            ], [
                'product_id' => '22',
                'ingredient_id' => '3'
            ], [
                'product_id' => '22',
                'ingredient_id' => '35'
            ], [
                'product_id' => '22',
                'ingredient_id' => '5'
            ], [
                'product_id' => '22',
                'ingredient_id' => '16'
            ], [
                'product_id' => '23',
                'ingredient_id' => '4'
            ], [
                'product_id' => '23',
                'ingredient_id' => '34'
            ], [
                'product_id' => '23',
                'ingredient_id' => '2'
            ], [
                'product_id' => '23',
                'ingredient_id' => '6'
            ], [
                'product_id' => '23',
                'ingredient_id' => '3'
            ], [
                'product_id' => '23',
                'ingredient_id' => '5'
            ], [
                'product_id' => '23',
                'ingredient_id' => '16'
            ], [
                'product_id' => '24',
                'ingredient_id' => '4'
            ], [
                'product_id' => '24',
                'ingredient_id' => '20'
            ], [
                'product_id' => '24',
                'ingredient_id' => '1'
            ], [
                'product_id' => '24',
                'ingredient_id' => '2'
            ], [
                'product_id' => '24',
                'ingredient_id' => '36'
            ], [
                'product_id' => '24',
                'ingredient_id' => '3'
            ], [
                'product_id' => '24',
                'ingredient_id' => '30'
            ], [
                'product_id' => '25',
                'ingredient_id' => '4'
            ], [
                'product_id' => '25',
                'ingredient_id' => '20'
            ], [
                'product_id' => '25',
                'ingredient_id' => '1'
            ], [
                'product_id' => '25',
                'ingredient_id' => '2'
            ], [
                'product_id' => '25',
                'ingredient_id' => '37'
            ], [
                'product_id' => '25',
                'ingredient_id' => '3'
            ], [
                'product_id' => '25',
                'ingredient_id' => '30'
            ], [
                'product_id' => '26',
                'ingredient_id' => '4'
            ], [
                'product_id' => '26',
                'ingredient_id' => '20'
            ], [
                'product_id' => '26',
                'ingredient_id' => '37'
            ], [
                'product_id' => '26',
                'ingredient_id' => '29'
            ], [
                'product_id' => '26',
                'ingredient_id' => '38'
            ], [
                'product_id' => '26',
                'ingredient_id' => '30'
            ], [
                'product_id' => '26',
                'ingredient_id' => '16'
            ], [
                'product_id' => '27',
                'ingredient_id' => '39'
            ], [
                'product_id' => '27',
                'ingredient_id' => '20'
            ], [
                'product_id' => '27',
                'ingredient_id' => '35'
            ], [
                'product_id' => '27',
                'ingredient_id' => '40'
            ], [
                'product_id' => '27',
                'ingredient_id' => '41'
            ], [
                'product_id' => '27',
                'ingredient_id' => '30'
            ], [
                'product_id' => '27',
                'ingredient_id' => '42'
            ], [
                'product_id' => '28',
                'ingredient_id' => '39'
            ], [
                'product_id' => '28',
                'ingredient_id' => '20'
            ], [
                'product_id' => '28',
                'ingredient_id' => '43'
            ], [
                'product_id' => '28',
                'ingredient_id' => '25'
            ], [
                'product_id' => '28',
                'ingredient_id' => '40'
            ], [
                'product_id' => '28',
                'ingredient_id' => '41'
            ], [
                'product_id' => '28',
                'ingredient_id' => '30'
            ], [
                'product_id' => '29',
                'ingredient_id' => '13'
            ], [
                'product_id' => '29',
                'ingredient_id' => '20'
            ], [
                'product_id' => '29',
                'ingredient_id' => '1'
            ], [
                'product_id' => '29',
                'ingredient_id' => '12'
            ], [
                'product_id' => '29',
                'ingredient_id' => '30'
            ], [
                'product_id' => '30',
                'ingredient_id' => '13'
            ], [
                'product_id' => '30',
                'ingredient_id' => '14'
            ], [
                'product_id' => '30',
                'ingredient_id' => '6'
            ], [
                'product_id' => '30',
                'ingredient_id' => '20'
            ], [
                'product_id' => '30',
                'ingredient_id' => '30'
            ], [
                'product_id' => '31',
                'ingredient_id' => '4'
            ], [
                'product_id' => '31',
                'ingredient_id' => '30'
            ], [
                'product_id' => '31',
                'ingredient_id' => '20'
            ], [
                'product_id' => '31',
                'ingredient_id' => '44'
            ], [
                'product_id' => '31',
                'ingredient_id' => '45'
            ], [
                'product_id' => '31',
                'ingredient_id' => '46'
            ], [
                'product_id' => '33',
                'ingredient_id' => '47'
            ], [
                'product_id' => '33',
                'ingredient_id' => '1'
            ], [
                'product_id' => '33',
                'ingredient_id' => '48'
            ], [
                'product_id' => '33',
                'ingredient_id' => '49'
            ], [
                'product_id' => '33',
                'ingredient_id' => '50'
            ], [
                'product_id' => '33',
                'ingredient_id' => '51'
            ], [
                'product_id' => '34',
                'ingredient_id' => '52'
            ], [
                'product_id' => '34',
                'ingredient_id' => '1'
            ], [
                'product_id' => '34',
                'ingredient_id' => '53'
            ], [
                'product_id' => '35',
                'ingredient_id' => '54'
            ], [
                'product_id' => '35',
                'ingredient_id' => '3'
            ], [
                'product_id' => '35',
                'ingredient_id' => '40'
            ], [
                'product_id' => '35',
                'ingredient_id' => '55'
            ], [
                'product_id' => '36',
                'ingredient_id' => '54'
            ], [
                'product_id' => '36',
                'ingredient_id' => '2'
            ], [
                'product_id' => '36',
                'ingredient_id' => '3'
            ], [
                'product_id' => '36',
                'ingredient_id' => '40'
            ], [
                'product_id' => '36',
                'ingredient_id' => '55'
            ], [
                'product_id' => '37',
                'ingredient_id' => '54'
            ], [
                'product_id' => '37',
                'ingredient_id' => '2'
            ], [
                'product_id' => '37',
                'ingredient_id' => '35'
            ], [
                'product_id' => '37',
                'ingredient_id' => '3'
            ], [
                'product_id' => '37',
                'ingredient_id' => '40'
            ], [
                'product_id' => '37',
                'ingredient_id' => '55'
            ], [
                'product_id' => '38',
                'ingredient_id' => '54'
            ], [
                'product_id' => '38',
                'ingredient_id' => '3'
            ], [
                'product_id' => '38',
                'ingredient_id' => '6'
            ], [
                'product_id' => '38',
                'ingredient_id' => '40'
            ], [
                'product_id' => '38',
                'ingredient_id' => '56'
            ], [
                'product_id' => '38',
                'ingredient_id' => '55'
            ], [
                'product_id' => '39',
                'ingredient_id' => '54'
            ], [
                'product_id' => '39',
                'ingredient_id' => '2'
            ], [
                'product_id' => '39',
                'ingredient_id' => '35'
            ], [
                'product_id' => '39',
                'ingredient_id' => '3'
            ], [
                'product_id' => '39',
                'ingredient_id' => '1'
            ], [
                'product_id' => '39',
                'ingredient_id' => '6'
            ], [
                'product_id' => '39',
                'ingredient_id' => '40'
            ], [
                'product_id' => '39',
                'ingredient_id' => '55'
            ], [
                'product_id' => '40',
                'ingredient_id' => '54'
            ], [
                'product_id' => '40',
                'ingredient_id' => '2'
            ], [
                'product_id' => '40',
                'ingredient_id' => '37'
            ], [
                'product_id' => '40',
                'ingredient_id' => '3'
            ], [
                'product_id' => '40',
                'ingredient_id' => '12'
            ], [
                'product_id' => '40',
                'ingredient_id' => '6'
            ], [
                'product_id' => '40',
                'ingredient_id' => '40'
            ], [
                'product_id' => '40',
                'ingredient_id' => '55'
            ], [
                'product_id' => '41',
                'ingredient_id' => '54'
            ], [
                'product_id' => '41',
                'ingredient_id' => '57'
            ], [
                'product_id' => '41',
                'ingredient_id' => '26'
            ], [
                'product_id' => '41',
                'ingredient_id' => '23'
            ], [
                'product_id' => '41',
                'ingredient_id' => '38'
            ], [
                'product_id' => '41',
                'ingredient_id' => '40'
            ], [
                'product_id' => '41',
                'ingredient_id' => '55'
            ], [
                'product_id' => '42',
                'ingredient_id' => '54'
            ], [
                'product_id' => '42',
                'ingredient_id' => '3'
            ], [
                'product_id' => '42',
                'ingredient_id' => '1'
            ], [
                'product_id' => '42',
                'ingredient_id' => '6'
            ], [
                'product_id' => '42',
                'ingredient_id' => '12'
            ], [
                'product_id' => '42',
                'ingredient_id' => '4'
            ], [
                'product_id' => '42',
                'ingredient_id' => '40'
            ], [
                'product_id' => '42',
                'ingredient_id' => '56'
            ], [
                'product_id' => '42',
                'ingredient_id' => '55'
            ], [
                'product_id' => '43',
                'ingredient_id' => '54'
            ], [
                'product_id' => '43',
                'ingredient_id' => '3'
            ], [
                'product_id' => '43',
                'ingredient_id' => '23'
            ], [
                'product_id' => '43',
                'ingredient_id' => '25'
            ], [
                'product_id' => '43',
                'ingredient_id' => '58'
            ], [
                'product_id' => '43',
                'ingredient_id' => '12'
            ], [
                'product_id' => '43',
                'ingredient_id' => '26'
            ], [
                'product_id' => '43',
                'ingredient_id' => '40'
            ], [
                'product_id' => '43',
                'ingredient_id' => '59'
            ], [
                'product_id' => '44',
                'ingredient_id' => '54'
            ], [
                'product_id' => '44',
                'ingredient_id' => '3'
            ], [
                'product_id' => '44',
                'ingredient_id' => '2'
            ], [
                'product_id' => '44',
                'ingredient_id' => '35'
            ], [
                'product_id' => '44',
                'ingredient_id' => '1'
            ], [
                'product_id' => '44',
                'ingredient_id' => '6'
            ], [
                'product_id' => '44',
                'ingredient_id' => '12'
            ], [
                'product_id' => '44',
                'ingredient_id' => '13'
            ], [
                'product_id' => '44',
                'ingredient_id' => '40'
            ], [
                'product_id' => '44',
                'ingredient_id' => '55'
            ], [
                'product_id' => '45',
                'ingredient_id' => '4'
            ], [
                'product_id' => '45',
                'ingredient_id' => '2'
            ], [
                'product_id' => '45',
                'ingredient_id' => '37'
            ], [
                'product_id' => '45',
                'ingredient_id' => '43'
            ], [
                'product_id' => '45',
                'ingredient_id' => '3'
            ], [
                'product_id' => '45',
                'ingredient_id' => '50'
            ], [
                'product_id' => '45',
                'ingredient_id' => '40'
            ], [
                'product_id' => '45',
                'ingredient_id' => '55'
            ], [
                'product_id' => '46',
                'ingredient_id' => '54'
            ], [
                'product_id' => '46',
                'ingredient_id' => '60'
            ], [
                'product_id' => '46',
                'ingredient_id' => '39'
            ], [
                'product_id' => '46',
                'ingredient_id' => '61'
            ], [
                'product_id' => '46',
                'ingredient_id' => '62'
            ], [
                'product_id' => '46',
                'ingredient_id' => '40'
            ], [
                'product_id' => '46',
                'ingredient_id' => '55'
            ], [
                'product_id' => '47',
                'ingredient_id' => '63'
            ], [
                'product_id' => '47',
                'ingredient_id' => '3'
            ], [
                'product_id' => '47',
                'ingredient_id' => '105'
            ], [
                'product_id' => '47',
                'ingredient_id' => '64'
            ], [
                'product_id' => '47',
                'ingredient_id' => '20'
            ], [
                'product_id' => '47',
                'ingredient_id' => '26'
            ], [
                'product_id' => '47',
                'ingredient_id' => '40'
            ], [
                'product_id' => '47',
                'ingredient_id' => '55'
            ], [
                'product_id' => '48',
                'ingredient_id' => '54'
            ], [
                'product_id' => '48',
                'ingredient_id' => '3'
            ], [
                'product_id' => '48',
                'ingredient_id' => '44'
            ], [
                'product_id' => '48',
                'ingredient_id' => '45'
            ], [
                'product_id' => '48',
                'ingredient_id' => '106'
            ], [
                'product_id' => '48',
                'ingredient_id' => '9'
            ], [
                'product_id' => '48',
                'ingredient_id' => '61'
            ], [
                'product_id' => '48',
                'ingredient_id' => '40'
            ], [
                'product_id' => '48',
                'ingredient_id' => '55'
            ], [
                'product_id' => '52',
                'ingredient_id' => '20'
            ], [
                'product_id' => '52',
                'ingredient_id' => '65'
            ], [
                'product_id' => '52',
                'ingredient_id' => '10'
            ], [
                'product_id' => '52',
                'ingredient_id' => '56'
            ], [
                'product_id' => '53',
                'ingredient_id' => '20'
            ], [
                'product_id' => '53',
                'ingredient_id' => '65'
            ], [
                'product_id' => '53',
                'ingredient_id' => '10'
            ], [
                'product_id' => '53',
                'ingredient_id' => '66'
            ], [
                'product_id' => '54',
                'ingredient_id' => '20'
            ], [
                'product_id' => '54',
                'ingredient_id' => '65'
            ], [
                'product_id' => '54',
                'ingredient_id' => '10'
            ], [
                'product_id' => '54',
                'ingredient_id' => '66'
            ], [
                'product_id' => '54',
                'ingredient_id' => '28'
            ], [
                'product_id' => '55',
                'ingredient_id' => '30'
            ], [
                'product_id' => '55',
                'ingredient_id' => '20'
            ], [
                'product_id' => '55',
                'ingredient_id' => '28'
            ], [
                'product_id' => '55',
                'ingredient_id' => '63'
            ], [
                'product_id' => '55',
                'ingredient_id' => '67'
            ], [
                'product_id' => '55',
                'ingredient_id' => '29'
            ], [
                'product_id' => '55',
                'ingredient_id' => '26'
            ], [
                'product_id' => '56',
                'ingredient_id' => '30'
            ], [
                'product_id' => '56',
                'ingredient_id' => '65'
            ], [
                'product_id' => '56',
                'ingredient_id' => '28'
            ], [
                'product_id' => '56',
                'ingredient_id' => '107'
            ], [
                'product_id' => '56',
                'ingredient_id' => '67'
            ], [
                'product_id' => '56',
                'ingredient_id' => '29'
            ], [
                'product_id' => '57',
                'ingredient_id' => '30'
            ], [
                'product_id' => '57',
                'ingredient_id' => '20'
            ], [
                'product_id' => '57',
                'ingredient_id' => '28'
            ], [
                'product_id' => '57',
                'ingredient_id' => '68'
            ], [
                'product_id' => '57',
                'ingredient_id' => '67'
            ], [
                'product_id' => '58',
                'ingredient_id' => '30'
            ], [
                'product_id' => '58',
                'ingredient_id' => '20'
            ], [
                'product_id' => '58',
                'ingredient_id' => '65'
            ], [
                'product_id' => '58',
                'ingredient_id' => '40'
            ], [
                'product_id' => '58',
                'ingredient_id' => '69'
            ], [
                'product_id' => '58',
                'ingredient_id' => '66'
            ], [
                'product_id' => '58',
                'ingredient_id' => '55'
            ], [
                'product_id' => '58',
                'ingredient_id' => '53'
            ], [
                'product_id' => '58',
                'ingredient_id' => '67'
            ], [
                'product_id' => '58',
                'ingredient_id' => '46'
            ], [
                'product_id' => '59',
                'ingredient_id' => '30'
            ], [
                'product_id' => '59',
                'ingredient_id' => '20'
            ], [
                'product_id' => '59',
                'ingredient_id' => '65'
            ], [
                'product_id' => '59',
                'ingredient_id' => '40'
            ], [
                'product_id' => '59',
                'ingredient_id' => '69'
            ], [
                'product_id' => '59',
                'ingredient_id' => '66'
            ], [
                'product_id' => '59',
                'ingredient_id' => '55'
            ], [
                'product_id' => '59',
                'ingredient_id' => '53'
            ], [
                'product_id' => '59',
                'ingredient_id' => '67'
            ], [
                'product_id' => '59',
                'ingredient_id' => '46'
            ], [
                'product_id' => '59',
                'ingredient_id' => '28'
            ], [
                'product_id' => '60',
                'ingredient_id' => '30'
            ], [
                'product_id' => '60',
                'ingredient_id' => '43'
            ], [
                'product_id' => '60',
                'ingredient_id' => '108'
            ], [
                'product_id' => '60',
                'ingredient_id' => '25'
            ], [
                'product_id' => '60',
                'ingredient_id' => '40'
            ], [
                'product_id' => '60',
                'ingredient_id' => '70'
            ], [
                'product_id' => '60',
                'ingredient_id' => '53'
            ], [
                'product_id' => '60',
                'ingredient_id' => '28'
            ], [
                'product_id' => '60',
                'ingredient_id' => '67'
            ], [
                'product_id' => '61',
                'ingredient_id' => '30'
            ], [
                'product_id' => '61',
                'ingredient_id' => '71'
            ], [
                'product_id' => '61',
                'ingredient_id' => '58'
            ], [
                'product_id' => '61',
                'ingredient_id' => '70'
            ], [
                'product_id' => '61',
                'ingredient_id' => '53'
            ], [
                'product_id' => '61',
                'ingredient_id' => '28'
            ], [
                'product_id' => '61',
                'ingredient_id' => '67'
            ], [
                'product_id' => '61',
                'ingredient_id' => '23'
            ], [
                'product_id' => '62',
                'ingredient_id' => '11'
            ], [
                'product_id' => '62',
                'ingredient_id' => '20'
            ], [
                'product_id' => '62',
                'ingredient_id' => '108'
            ], [
                'product_id' => '62',
                'ingredient_id' => '28'
            ], [
                'product_id' => '62',
                'ingredient_id' => '4'
            ], [
                'product_id' => '62',
                'ingredient_id' => '67'
            ], [
                'product_id' => '62',
                'ingredient_id' => '29'
            ], [
                'product_id' => '63',
                'ingredient_id' => '30'
            ], [
                'product_id' => '63',
                'ingredient_id' => '20'
            ], [
                'product_id' => '63',
                'ingredient_id' => '28'
            ], [
                'product_id' => '63',
                'ingredient_id' => '8'
            ], [
                'product_id' => '63',
                'ingredient_id' => '67'
            ], [
                'product_id' => '63',
                'ingredient_id' => '29'
            ], [
                'product_id' => '63',
                'ingredient_id' => '26'
            ], [
                'product_id' => '64',
                'ingredient_id' => '30'
            ], [
                'product_id' => '64',
                'ingredient_id' => '20'
            ], [
                'product_id' => '64',
                'ingredient_id' => '28'
            ], [
                'product_id' => '64',
                'ingredient_id' => '24'
            ], [
                'product_id' => '64',
                'ingredient_id' => '67'
            ], [
                'product_id' => '64',
                'ingredient_id' => '29'
            ], [
                'product_id' => '64',
                'ingredient_id' => '26'
            ], [
                'product_id' => '65',
                'ingredient_id' => '30'
            ], [
                'product_id' => '65',
                'ingredient_id' => '20'
            ], [
                'product_id' => '65',
                'ingredient_id' => '43'
            ], [
                'product_id' => '65',
                'ingredient_id' => '40'
            ], [
                'product_id' => '65',
                'ingredient_id' => '108'
            ], [
                'product_id' => '65',
                'ingredient_id' => '25'
            ], [
                'product_id' => '65',
                'ingredient_id' => '69'
            ], [
                'product_id' => '65',
                'ingredient_id' => '53'
            ], [
                'product_id' => '65',
                'ingredient_id' => '67'
            ], [
                'product_id' => '65',
                'ingredient_id' => '45'
            ], [
                'product_id' => '66',
                'ingredient_id' => '30'
            ], [
                'product_id' => '66',
                'ingredient_id' => '20'
            ], [
                'product_id' => '66',
                'ingredient_id' => '65'
            ], [
                'product_id' => '66',
                'ingredient_id' => '108'
            ], [
                'product_id' => '66',
                'ingredient_id' => '40'
            ], [
                'product_id' => '66',
                'ingredient_id' => '39'
            ], [
                'product_id' => '66',
                'ingredient_id' => '67'
            ], [
                'product_id' => '66',
                'ingredient_id' => '46'
            ], [
                'product_id' => '67',
                'ingredient_id' => '30'
            ], [
                'product_id' => '67',
                'ingredient_id' => '20'
            ], [
                'product_id' => '67',
                'ingredient_id' => '108'
            ], [
                'product_id' => '67',
                'ingredient_id' => '28'
            ], [
                'product_id' => '67',
                'ingredient_id' => '72'
            ], [
                'product_id' => '67',
                'ingredient_id' => '67'
            ], [
                'product_id' => '67',
                'ingredient_id' => '29'
            ], [
                'product_id' => '68',
                'ingredient_id' => '30'
            ], [
                'product_id' => '68',
                'ingredient_id' => '20'
            ], [
                'product_id' => '68',
                'ingredient_id' => '4'
            ], [
                'product_id' => '68',
                'ingredient_id' => '45'
            ], [
                'product_id' => '68',
                'ingredient_id' => '44'
            ], [
                'product_id' => '68',
                'ingredient_id' => '67'
            ], [
                'product_id' => '68',
                'ingredient_id' => '46'
            ], [
                'product_id' => '69',
                'ingredient_id' => '73'
            ], [
                'product_id' => '69',
                'ingredient_id' => '26'
            ], [
                'product_id' => '70',
                'ingredient_id' => '35'
            ], [
                'product_id' => '70',
                'ingredient_id' => '74'
            ], [
                'product_id' => '70',
                'ingredient_id' => '75'
            ], [
                'product_id' => '70',
                'ingredient_id' => '26'
            ], [
                'product_id' => '71',
                'ingredient_id' => '64'
            ], [
                'product_id' => '71',
                'ingredient_id' => '1'
            ], [
                'product_id' => '71',
                'ingredient_id' => '75'
            ], [
                'product_id' => '71',
                'ingredient_id' => '26'
            ], [
                'product_id' => '72',
                'ingredient_id' => '2'
            ], [
                'product_id' => '72',
                'ingredient_id' => '76'
            ], [
                'product_id' => '72',
                'ingredient_id' => '26'
            ], [
                'product_id' => '73',
                'ingredient_id' => '75'
            ], [
                'product_id' => '73',
                'ingredient_id' => '23'
            ], [
                'product_id' => '73',
                'ingredient_id' => '26'
            ], [
                'product_id' => '73',
                'ingredient_id' => '38'
            ], [
                'product_id' => '73',
                'ingredient_id' => '57'
            ], [
                'product_id' => '74',
                'ingredient_id' => '54'
            ], [
                'product_id' => '74',
                'ingredient_id' => '53'
            ], [
                'product_id' => '74',
                'ingredient_id' => '109'
            ], [
                'product_id' => '74',
                'ingredient_id' => '61'
            ], [
                'product_id' => '74',
                'ingredient_id' => '59'
            ], [
                'product_id' => '74',
                'ingredient_id' => '77'
            ], [
                'product_id' => '74',
                'ingredient_id' => '26'
            ], [
                'product_id' => '75',
                'ingredient_id' => '78'
            ], [
                'product_id' => '75',
                'ingredient_id' => '75'
            ], [
                'product_id' => '75',
                'ingredient_id' => '26'
            ], [
                'product_id' => '76',
                'ingredient_id' => '78'
            ], [
                'product_id' => '76',
                'ingredient_id' => '75'
            ], [
                'product_id' => '76',
                'ingredient_id' => '57'
            ], [
                'product_id' => '76',
                'ingredient_id' => '23'
            ], [
                'product_id' => '76',
                'ingredient_id' => '38'
            ], [
                'product_id' => '76',
                'ingredient_id' => '26'
            ], [
                'product_id' => '77',
                'ingredient_id' => '78'
            ], [
                'product_id' => '77',
                'ingredient_id' => '12'
            ], [
                'product_id' => '77',
                'ingredient_id' => '64'
            ], [
                'product_id' => '77',
                'ingredient_id' => '35'
            ], [
                'product_id' => '77',
                'ingredient_id' => '75'
            ], [
                'product_id' => '77',
                'ingredient_id' => '40'
            ], [
                'product_id' => '77',
                'ingredient_id' => '59'
            ], [
                'product_id' => '78',
                'ingredient_id' => '79'
            ], [
                'product_id' => '78',
                'ingredient_id' => '34'
            ], [
                'product_id' => '78',
                'ingredient_id' => '22'
            ], [
                'product_id' => '78',
                'ingredient_id' => '46'
            ], [
                'product_id' => '78',
                'ingredient_id' => '7'
            ], [
                'product_id' => '79',
                'ingredient_id' => '80'
            ], [
                'product_id' => '79',
                'ingredient_id' => '81'
            ], [
                'product_id' => '79',
                'ingredient_id' => '7'
            ], [
                'product_id' => '79',
                'ingredient_id' => '46'
            ], [
                'product_id' => '79',
                'ingredient_id' => '34'
            ], [
                'product_id' => '80',
                'ingredient_id' => '34'
            ], [
                'product_id' => '80',
                'ingredient_id' => '7'
            ], [
                'product_id' => '80',
                'ingredient_id' => '46'
            ], [
                'product_id' => '80',
                'ingredient_id' => '30'
            ], [
                'product_id' => '80',
                'ingredient_id' => '82'
            ], [
                'product_id' => '81',
                'ingredient_id' => '81'
            ], [
                'product_id' => '81',
                'ingredient_id' => '7'
            ], [
                'product_id' => '81',
                'ingredient_id' => '46'
            ], [
                'product_id' => '81',
                'ingredient_id' => '83'
            ], [
                'product_id' => '82',
                'ingredient_id' => '79'
            ], [
                'product_id' => '82',
                'ingredient_id' => '34'
            ], [
                'product_id' => '82',
                'ingredient_id' => '22'
            ], [
                'product_id' => '82',
                'ingredient_id' => '46'
            ], [
                'product_id' => '82',
                'ingredient_id' => '84'
            ], [
                'product_id' => '83',
                'ingredient_id' => '80'
            ], [
                'product_id' => '83',
                'ingredient_id' => '34'
            ], [
                'product_id' => '83',
                'ingredient_id' => '7'
            ], [
                'product_id' => '83',
                'ingredient_id' => '81'
            ], [
                'product_id' => '83',
                'ingredient_id' => '20'
            ], [
                'product_id' => '83',
                'ingredient_id' => '30'
            ], [
                'product_id' => '83',
                'ingredient_id' => '85'
            ], [
                'product_id' => '84',
                'ingredient_id' => '16'
            ], [
                'product_id' => '84',
                'ingredient_id' => '86'
            ], [
                'product_id' => '84',
                'ingredient_id' => '20'
            ], [
                'product_id' => '84',
                'ingredient_id' => '30'
            ], [
                'product_id' => '84',
                'ingredient_id' => '7'
            ], [
                'product_id' => '85',
                'ingredient_id' => '80'
            ], [
                'product_id' => '85',
                'ingredient_id' => '30'
            ], [
                'product_id' => '85',
                'ingredient_id' => '7'
            ], [
                'product_id' => '85',
                'ingredient_id' => '46'
            ], [
                'product_id' => '85',
                'ingredient_id' => '65'
            ], [
                'product_id' => '86',
                'ingredient_id' => '16'
            ], [
                'product_id' => '86',
                'ingredient_id' => '30'
            ], [
                'product_id' => '86',
                'ingredient_id' => '7'
            ], [
                'product_id' => '86',
                'ingredient_id' => '20'
            ], [
                'product_id' => '86',
                'ingredient_id' => '81'
            ], [
                'product_id' => '86',
                'ingredient_id' => '85'
            ], [
                'product_id' => '130',
                'ingredient_id' => '87'
            ], [
                'product_id' => '130',
                'ingredient_id' => '88'
            ], [
                'product_id' => '130',
                'ingredient_id' => '89'
            ], [
                'product_id' => '131',
                'ingredient_id' => '87'
            ], [
                'product_id' => '131',
                'ingredient_id' => '88'
            ], [
                'product_id' => '131',
                'ingredient_id' => '90'
            ], [
                'product_id' => '131',
                'ingredient_id' => '91'
            ], [
                'product_id' => '131',
                'ingredient_id' => '92'
            ], [
                'product_id' => '132',
                'ingredient_id' => '87'
            ], [
                'product_id' => '132',
                'ingredient_id' => '88'
            ], [
                'product_id' => '132',
                'ingredient_id' => '93'
            ], [
                'product_id' => '132',
                'ingredient_id' => '92'
            ], [
                'product_id' => '133',
                'ingredient_id' => '87'
            ], [
                'product_id' => '133',
                'ingredient_id' => '88'
            ], [
                'product_id' => '133',
                'ingredient_id' => '94'
            ], [
                'product_id' => '133',
                'ingredient_id' => '92'
            ], [
                'product_id' => '134',
                'ingredient_id' => '87'
            ], [
                'product_id' => '134',
                'ingredient_id' => '88'
            ], [
                'product_id' => '134',
                'ingredient_id' => '95'
            ], [
                'product_id' => '134',
                'ingredient_id' => '92'
            ], [
                'product_id' => '135',
                'ingredient_id' => '87'
            ], [
                'product_id' => '135',
                'ingredient_id' => '88'
            ], [
                'product_id' => '135',
                'ingredient_id' => '96'
            ], [
                'product_id' => '135',
                'ingredient_id' => '89'
            ], [
                'product_id' => '135',
                'ingredient_id' => '97'
            ], [
                'product_id' => '135',
                'ingredient_id' => '98'
            ], [
                'product_id' => '136',
                'ingredient_id' => '97'
            ], [
                'product_id' => '136',
                'ingredient_id' => '88'
            ], [
                'product_id' => '136',
                'ingredient_id' => '99'
            ], [
                'product_id' => '136',
                'ingredient_id' => '100'
            ], [
                'product_id' => '136',
                'ingredient_id' => '101'
            ], [
                'product_id' => '137',
                'ingredient_id' => '101'
            ], [
                'product_id' => '137',
                'ingredient_id' => '88'
            ], [
                'product_id' => '137',
                'ingredient_id' => '102'
            ], [
                'product_id' => '137',
                'ingredient_id' => '103'
            ], [
                'product_id' => '137',
                'ingredient_id' => '104'
            ]/*[
                'product_id' => '32',
                'ingredient_id' => '110'
            ], [
                'product_id' => '89',
                'ingredient_id' => '110'
            ], [
                'product_id' => '90',
                'ingredient_id' => '110'
            ], [
                'product_id' => '91',
                'ingredient_id' => '110'
            ], [
                'product_id' => '92',
                'ingredient_id' => '110'
            ], [
                'product_id' => '93',
                'ingredient_id' => '110'
            ], [
                'product_id' => '94',
                'ingredient_id' => '110'
            ], [
                'product_id' => '95',
                'ingredient_id' => '110'
            ], [
                'product_id' => '96',
                'ingredient_id' => '110'
            ], [
                'product_id' => '97',
                'ingredient_id' => '110'
            ], [
                'product_id' => '98',
                'ingredient_id' => '110'
            ], [
                'product_id' => '99',
                'ingredient_id' => '110'
            ], [
                'product_id' => '100',
                'ingredient_id' => '110'
            ], [
                'product_id' => '101',
                'ingredient_id' => '110'
            ], [
                'product_id' => '102',
                'ingredient_id' => '110'
            ], [
                'product_id' => '103',
                'ingredient_id' => '110'
            ], [
                'product_id' => '104',
                'ingredient_id' => '110'
            ], [
                'product_id' => '105',
                'ingredient_id' => '110'
            ], [
                'product_id' => '106',
                'ingredient_id' => '110'
            ], [
                'product_id' => '107',
                'ingredient_id' => '110'
            ], [
                'product_id' => '108',
                'ingredient_id' => '110'
            ], [
                'product_id' => '109',
                'ingredient_id' => '110'
            ], [
                'product_id' => '110',
                'ingredient_id' => '110'
            ], [
                'product_id' => '111',
                'ingredient_id' => '110'
            ], [
                'product_id' => '112',
                'ingredient_id' => '110'
            ], [
                'product_id' => '113',
                'ingredient_id' => '110'
            ], [
                'product_id' => '114',
                'ingredient_id' => '110'
            ], [
                'product_id' => '115',
                'ingredient_id' => '110'
            ], [
                'product_id' => '116',
                'ingredient_id' => '110'
            ], [
                'product_id' => '117',
                'ingredient_id' => '110'
            ]*/]
        );
    }
}
