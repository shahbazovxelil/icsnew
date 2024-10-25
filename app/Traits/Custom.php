<?php
namespace App\Traits;
use App\Models\Language;

trait Custom{

    public function trans_langs($translation_languages){
        $languages =[];
        foreach ($translation_languages as $translation_language){
            array_push($languages,$translation_language->locale);
        }
        //all languages
        $alllanguages = Language::all();
        $array_alllanguages =[];
        foreach ($alllanguages as $alllanguage){
            array_push($array_alllanguages,$alllanguage->locale);
        }
        $collection1 = collect($array_alllanguages);
        $collection2 = collect($languages);
        $differences = $collection1->diff($collection2);
        $differences->all();
        return $differences;
    }










}
