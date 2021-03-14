<?php

/*
    *
    *   Определения id текущего языка
    *
*/

namespace common\components;

use common\models\Lang;

class LanguageId extends Lang  
{
	public $id = null;
    public $url = null;

	public function init() {
		parent::init();
		if(self::$current !== null){
            $this->id = self::$current->id;
            $this->url = self::$current->url;
        }
	}
}