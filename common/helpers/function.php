<?php

function getTranslate($translate)
{
    return Yii::t('main', $translate) !== "" ? Yii::t('main', $translate) : $translate;
}

function t($translate)
{
    return getTranslate($translate);
}

function toRoute($route)
{
    return \yii\helpers\Url::toRoute($route);
}
function pre($model){
    echo "<pre>";
    var_dump($model);
    echo "</pre>";
    die;
}
