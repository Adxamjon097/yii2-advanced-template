<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 07.01.2018
 * Time: 7:48
 * This controller inserts default languages into lang table
 */
namespace console\controllers;

use common\models\Lang;
use yii\console\Controller;

class LangController extends Controller{

    public function actionInit(){
        // Russian language
        $ru = new Lang([
            'url' => 'ru',
            'local' => 'ru',
            'name' => 'Русский',
            'default' => 1
        ]);
        $ru->save(false);

        //Uzbek language
        $uz = new Lang([
            'url' => 'uz',
            'local' => 'uz',
            'name' => "O'zbekcha",
            'default' => 0
        ]);
        $uz->save(false);

        //English language
        $en = new Lang([
            'url' => 'en',
            'local' => 'en',
            'name' => 'English',
            'default' => 0
        ]);
        $en->save(false);

        echo 'All languages are inserted!';
    }
}