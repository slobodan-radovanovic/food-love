<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert(
            [[
                'ingredient_name' => 'jaja'
            ], [
                'ingredient_name' => 'šunka'
            ], [
                'ingredient_name' => 'kačkavalj'
            ], [
                'ingredient_name' => 'pavlaka'
            ], [
                'ingredient_name' => 'kečap'
            ], [
                'ingredient_name' => 'kulen'
            ], [
                'ingredient_name' => 'sir'
            ], [
                'ingredient_name' => 'pikant dresing'
            ], [
                'ingredient_name' => 'slanina'
            ], [
                'ingredient_name' => 'luk'
            ], [
                'ingredient_name' => 'bebi spanać'
            ], [
                'ingredient_name' => 'pršuta'
            ], [
                'ingredient_name' => 'kajmak'
            ], [
                'ingredient_name' => 'ajvar'
            ], [
                'ingredient_name' => 'pomfrit'
            ], [
                'ingredient_name' => 'majonez'
            ], [
                'ingredient_name' => 'lepinja'
            ], [
                'ingredient_name' => '2 x kobasice'
            ], [
                'ingredient_name' => '2 x jaje'
            ], [
                'ingredient_name' => 'paradajz'
            ], [
                'ingredient_name' => '2 x viršle'
            ], [
                'ingredient_name' => 'senf'
            ], [
                'ingredient_name' => 'mozzarella'
            ], [
                'ingredient_name' => 'Food&love dresing'
            ], [
                'ingredient_name' => 'rukola'
            ], [
                'ingredient_name' => 'parmezan'
            ], [
                'ingredient_name' => 'dresing'
            ], [
                'ingredient_name' => 'grilovana piletina'
            ], [
                'ingredient_name' => 'grilovana slanina'
            ], [
                'ingredient_name' => 'zelena salata'
            ], [
                'ingredient_name' => 'grilovana pršuta'
            ], [
                'ingredient_name' => 'rojal dresing'
            ], [
                'ingredient_name' => 'hrskava piletina'
            ], [
                'ingredient_name' => 'kiseli krastavčići'
            ], [
                'ingredient_name' => 'pečurke'
            ], [
                'ingredient_name' => 'pečenica'
            ], [
                'ingredient_name' => 'dimljeni vrat'
            ], [
                'ingredient_name' => 'dimljeni kačkavalj'
            ], [
                'ingredient_name' => 'tunjevina'
            ], [
                'ingredient_name' => 'masline'
            ], [
                'ingredient_name' => 'posni majonez'
            ], [
                'ingredient_name' => 'luk(po želji)'
            ], [
                'ingredient_name' => 'kukuruz šećerac'
            ], [
                'ingredient_name' => 'dinstana govedina'
            ], [
                'ingredient_name' => 'crveni pasulj'
            ], [
                'ingredient_name' => 'crveni luk'
            ], [
                'ingredient_name' => 'graham brašno'
            ], [
                'ingredient_name' => 'semenke suncokreta'
            ], [
                'ingredient_name' => 'golica'
            ], [
                'ingredient_name' => 'susam'
            ], [
                'ingredient_name' => 'laneno seme'
            ], [
                'ingredient_name' => 'heljdino brašno'
            ], [
                'ingredient_name' => 'maslinovo ulje'
            ], [
                'ingredient_name' => 'pelat'
            ], [
                'ingredient_name' => 'origano'
            ], [
                'ingredient_name' => 'feferoni'
            ], [
                'ingredient_name' => 'gorgonzola'
            ], [
                'ingredient_name' => 'čeri'
            ], [
                'ingredient_name' => 'bosiljak'
            ], [
                'ingredient_name' => 'posni kačkavalj'
            ], [
                'ingredient_name' => 'crni luk'
            ], [
                'ingredient_name' => 'limun'
            ], [
                'ingredient_name' => 'cezar dresing'
            ], [
                'ingredient_name' => 'pančeta'
            ], [
                'ingredient_name' => 'krastavac'
            ], [
                'ingredient_name' => 'feta'
            ], [
                'ingredient_name' => 'kubeti'
            ], [
                'ingredient_name' => 'burgos dresing'
            ], [
                'ingredient_name' => 'limunov sok'
            ], [
                'ingredient_name' => 'aceto balsamico'
            ], [
                'ingredient_name' => 'avokado'
            ], [
                'ingredient_name' => 'susan dresing'
            ], [
                'ingredient_name' => 'bolognese sos'
            ], [
                'ingredient_name' => 'belo vino'
            ], [
                'ingredient_name' => 'neutralna pavlaka'
            ], [
                'ingredient_name' => 'paradajz sos'
            ], [
                'ingredient_name' => 'ljute paričice'
            ], [
                'ingredient_name' => 'komadići piletine'
            ], [
                'ingredient_name' => 'heinz kečap'
            ], [
                'ingredient_name' => 'BBQ sos'
            ], [
                'ingredient_name' => 'hrskava slanina'
            ], [
                'ingredient_name' => 'burger sos'
            ], [
                'ingredient_name' => 'čili'
            ], [
                'ingredient_name' => 'dupli sir'
            ], [
                'ingredient_name' => 'duplo meso'
            ], [
                'ingredient_name' => 'svež krastavac'
            ], [
                'ingredient_name' => 'lomljena plazma'
            ], [
                'ingredient_name' => 'grčki jogurt'
            ], [
                'ingredient_name' => 'mix voće'
            ], [
                'ingredient_name' => 'višnja'
            ], [
                'ingredient_name' => 'cimet'
            ], [
                'ingredient_name' => 'kranč musli'
            ], [
                'ingredient_name' => 'breskva'
            ], [
                'ingredient_name' => 'šumsko voće'
            ], [
                'ingredient_name' => 'malina'
            ], [
                'ingredient_name' => 'nutela'
            ], [
                'ingredient_name' => 'kranč musli čoko'
            ], [
                'ingredient_name' => 'banana'
            ], [
                'ingredient_name' => 'rendana čokolada'
            ], [
                'ingredient_name' => 'jagoda'
            ], [
                'ingredient_name' => 'kornifleks'
            ], [
                'ingredient_name' => 'laneno seme'
            ], [
                'ingredient_name' => 'čija semenke'
            ], [
                'ingredient_name' => 'goji bobice'
            ], [
                'ingredient_name' => 'piletina'
            ], [
                'ingredient_name' => 'peperoni'
            ], [
                'ingredient_name' => 'tzatziki dresing'
            ], [
                'ingredient_name' => 'paprika'
            ], [
                'ingredient_name' => 'beli luk'
            ], [
                'ingredient_name' => 'x'
            ]]
        );
    }
}
