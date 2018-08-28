<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductsTableSeeder extends Seeder
{

   /* DB::table('products')->delete();*/

    public function run()
    {
        DB::table('products')->insert([

            [
                'product_name' => 'Šunka',
                'price' => '220',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '1'
            ], [
                'product_name' => 'Pikant',
                'price' => '230',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '1'
            ], [
                'product_name' => 'Slanina',
                'price' => '230',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '1'
            ], [
                'product_name' => 'Spanać',
                'price' => '240',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '1'
            ], [
                'product_name' => 'Srpski',
                'price' => '240',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '1'
            ], [
                'product_name' => 'Ajvar',
                'price' => '230',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '1'
            ], [
                'product_name' => 'Pohovani kačkavalj',
                'price' => '300',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '2'
            ], [
                'product_name' => 'Engleski doručak',
                'price' => '300',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '2'
            ], [
                'product_name' => 'Beogradski doručak',
                'price' => '280',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '2'
            ], [
                'product_name' => 'Hot dog',
                'price' => '190',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '2'
            ], [
                'product_name' => 'Prženice',
                'price' => '210',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '2'
            ], [
                'product_name' => 'Italijanske prženice',
                'price' => '260',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '2'
            ], [
                'product_name' => 'Parma',
                'price' => '270',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Cezar',
                'price' => '260',
                'price2' => '230',
                'price3' => '240',
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Tzatziki',
                'price' => '250',
                'price2' => '220',
                'price3' => '230',
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Susam',
                'price' => '250',
                'price2' => '220',
                'price3' => '230',
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Pikant',
                'price' => '260',
                'price2' => '230',
                'price3' => '240',
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Food & Love',
                'price' => '270',
                'price2' => '240',
                'price3' => '250',
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Burgos',
                'price' => '250',
                'price2' => '220',
                'price3' => '230',
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Hrskava piletina',
                'price' => '270',
                'price2' => '240',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Index 1',
                'price' => '190',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Index 2',
                'price' => '200',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Index 3',
                'price' => '220',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Food 1',
                'price' => '250',
                'price2' => '220',
                'price3' => '230',
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Food 2',
                'price' => '250',
                'price2' => '220',
                'price3' => '230',
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Dimljeni',
                'price' => '260',
                'price2' => '230',
                'price3' => '240',
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Tuna',
                'price' => '220',
                'price2' => '200',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Posni',
                'price' => '230',
                'price2' => '210',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Užički',
                'price' => '250',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Ajvar',
                'price' => '250',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Goveđi',
                'price' => null,
                'price2' => '250',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '3'
            ], [
                'product_name' => 'Teleća čorba 0,3l',
                'price' => '160',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '5'
            ], [
                'product_name' => 'Hrono wrap',
                'price' => '150',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '6'
            ], [
                'product_name' => 'Hrono palačinka',
                'price' => '130',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '6'
            ], [
                'product_name' => 'Margharita',
                'price' => '280',
                'price2' => '410',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Vesuvio',
                'price' => '320',
                'price2' => '440',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Capricciosa',
                'price' => '340',
                'price2' => '450',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Pepperoni',
                'price' => '350',
                'price2' => '460',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Quattro stagioni',
                'price' => '360',
                'price2' => '470',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Quattro carni',
                'price' => '360',
                'price2' => '470',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Quattro formaggi',
                'price' => '370',
                'price2' => '480',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Srpska',
                'price' => '380',
                'price2' => '500',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Parma',
                'price' => '430',
                'price2' => '530',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Food & Love',
                'price' => '400',
                'price2' => '520',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Susam',
                'price' => '340',
                'price2' => '450',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Tonno',
                'price' => '340',
                'price2' => '460',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Cezar',
                'price' => '360',
                'price2' => '470',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Beef',
                'price' => '360',
                'price2' => '470',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Italijanska piroška (pola porcije)',
                'price' => '280',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Italijanska piroška (cela porcija)',
                'price' => '570',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Lazanje (600gr)',
                'price' => '570',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '7'
            ], [
                'product_name' => 'Srpska',
                'price' => '240',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Šopska',
                'price' => '250',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Šopska sa piletinom',
                'price' => '320',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Cezar',
                'price' => '350',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Tzatziki',
                'price' => '340',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Marbelja',
                'price' => '330',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Grčka',
                'price' => '280',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Grčka sa piletinom',
                'price' => '350',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Latina',
                'price' => '350',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Santjago',
                'price' => '380',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Popaj',
                'price' => '370',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Pikant',
                'price' => '350',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Food & Love',
                'price' => '370',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Posna',
                'price' => '280',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Tuna',
                'price' => '320',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Susam',
                'price' => '350',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Goveđa',
                'price' => '380',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '8'
            ], [
                'product_name' => 'Bolognese',
                'price' => '380',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '9'
            ], [
                'product_name' => 'Funghi',
                'price' => '350',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '9'
            ], [
                'product_name' => 'Carbonara',
                'price' => '380',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '9'
            ], [
                'product_name' => 'Milanese',
                'price' => '350',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '9'
            ], [
                'product_name' => 'Quattro Fornaggi',
                'price' => '420',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '9'
            ], [
                'product_name' => 'Arrabbiata',
                'price' => '330',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '9'
            ], [
                'product_name' => 'Italian chicken',
                'price' => '400',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '9'
            ], [
                'product_name' => 'Quattro fornaggi chicken',
                'price' => '450',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '9'
            ], [
                'product_name' => 'Food & Love',
                'price' => '480',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '9'
            ], [
                'product_name' => 'Cheese (180g)',
                'price' => '280',
                'price2' => '180',
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '10'
            ], [
                'product_name' => 'Western bacon (180g)',
                'price' => '310',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '10'
            ], [
                'product_name' => 'Royal (180g)',
                'price' => '310',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '10'
            ], [
                'product_name' => 'Hot mexican (180g)',
                'price' => '290',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '10'
            ], [
                'product_name' => 'Burger kifla (250g)',
                'price' => '360',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '10'
            ], [
                'product_name' => 'Fat boy (300g)',
                'price' => '410',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '10'
            ], [
                'product_name' => 'Classic chicken (180g)',
                'price' => '240',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '10'
            ], [
                'product_name' => 'BBQ chicken (180g)',
                'price' => '260',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '10'
            ], [
                'product_name' => 'Double chicken (300g)',
                'price' => '370',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '10'
            ], [
                'product_name' => 'Mali pomfrit 150g',
                'price' => '110',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '16'
            ], [
                'product_name' => 'Veliki pomfrit 200g',
                'price' => '140',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '16'
            ], [
                'product_name' => 'Komplet lepinja',
                'price' => '200',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '4'
            ], [
                'product_name' => 'Komplet lepinja sa pršutom',
                'price' => '250',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '4'
            ], [
                'product_name' => 'Pljeskavica (200g)',
                'price' => '310',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Kobasica (200g)',
                'price' => '330',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Pileći file (200g)',
                'price' => '330',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Pileći batak (200g)',
                'price' => '300',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Pohovani pileći file (200g)',
                'price' => '320',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Hrskava piletina (200g)',
                'price' => '340',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Meksička piletina(ljuto) +grill povrće (200g)',
                'price' => '350',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Vitaminski file +grill povrće (ne sadrži pomfrit) (200g)',
                'price' => '340',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Ćevapi',
                'price' => '320',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Pohovani pileći file u susamu (200g)',
                'price' => '330',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Punjene grilovane pečurke (250g)',
                'price' => '270',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Piletina u sosu od pečuraka (200g)',
                'price' => '370',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Piletina quattro formaggi (200g)',
                'price' => '390',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '11'
            ], [
                'product_name' => 'Mala pljeskavica (200g)',
                'price' => '210',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Srednja pljeskavica (250g)',
                'price' => '240',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Velika pljeskavica (300g)',
                'price' => '280',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Gurmanska pljeskavica (300g)',
                'price' => '290',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Roštilj kobasica - dimljena (200g)',
                'price' => '230',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Pileći batak (200g)',
                'price' => '200',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Pileći filovani batak (250g)',
                'price' => '230',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Pileći file (200g)',
                'price' => '230',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Pileći filovani file (250g)',
                'price' => '260',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Ćevapi (200g)',
                'price' => '220',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Punjena pljeskavica (250g)',
                'price' => '260',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Leskovačka ljuta pljeskavica (200g)',
                'price' => '220',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Pljeskavica u komplet lepinji (150g)',
                'price' => '290',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Dimljeni svinjski vrat (200g)',
                'price' => '270',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '12'
            ], [
                'product_name' => 'Food & Love (nutela, plazma, vanila)',
                'price' => '220',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '13'
            ], [
                'product_name' => 'Eurokrem',
                'price' => '140',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '13'
            ], [
                'product_name' => 'Nutela',
                'price' => '160',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '13'
            ], [
                'product_name' => 'Džem',
                'price' => '130',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '13'
            ], [
                'product_name' => 'Med',
                'price' => '150',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '13'
            ], [
                'product_name' => 'Kinder',
                'price' => '200',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '13'
            ], [
                'product_name' => 'Milka',
                'price' => '200',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '13'
            ], [
                'product_name' => 'Food & love (šunka, suvi vrat, pavlaka, dimljeni kačkavalj)',
                'price' => '230',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '14'
            ], [
                'product_name' => 'Šunka, kačkavalj, pavlaka',
                'price' => '180',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '14'
            ], [
                'product_name' => 'Pečenica, kačkavalj, pavlaka',
                'price' => '190',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '14'
            ], [
                'product_name' => 'Kulen, kačkavalj, pavlaka',
                'price' => '190',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '14'
            ], [
                'product_name' => 'Pršuta, kačkavalj, pavlaka',
                'price' => '210',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '14'
            ], [
                'product_name' => 'Mix',
                'price' => '220',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '15'
            ], [
                'product_name' => 'Višnja',
                'price' => '230',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '15'
            ], [
                'product_name' => 'Breskva',
                'price' => '230',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '15'
            ], [
                'product_name' => 'Šumski',
                'price' => '240',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '15'
            ], [
                'product_name' => 'Srpski',
                'price' => '240',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '15'
            ], [
                'product_name' => 'Food & love',
                'price' => '260',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '15'
            ], [
                'product_name' => 'Kapri',
                'price' => '260',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '15'
            ], [
                'product_name' => 'Fun & Fit',
                'price' => '270',
                'price2' => null,
                'price3' => null,
                'price4' => null,
                'price5' => null,
                'category_id' => '15'
            ], [
                'product_name' => 'Coca-Cola',
                'price' => '90',
                'price2' => '90',
                'price3' => '130',
                'price4' => '150',
                'price5' => '200',
                'category_id' => '17'
            ], [
                'product_name' => 'Fanta',
                'price' => '90',
                'price2' => '90',
                'price3' => '130',
                'price4' => '150',
                'price5' => '200',
                'category_id' => '17'
            ], [
                'product_name' => 'Sprite',
                'price' => '90',
                'price2' => '90',
                'price3' => '130',
                'price4' => '150',
                'price5' => '200',
                'category_id' => '17'
            ], [
                'product_name' => 'Kisela voda Knjaz Miloš',
                'price' => null,
                'price2' => '70',
                'price3' => null,
                'price4' => '120',
                'price5' => null,
                'category_id' => '17'
            ], [
                'product_name' => 'ROSA',
                'price' => null,
                'price2' => '70',
                'price3' => null,
                'price4' => '120',
                'price5' => null,
                'category_id' => '17'
            ]
         ]);

    }
}
