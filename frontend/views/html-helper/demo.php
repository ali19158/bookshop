<?php

use yii\helpers\Html;

echo Html::tag('p', 'Some text');

$array = [
    '1' => 'Beirut',
    '2' => 'Berlin',
    '3' => 'Budapest',
    '4' => 'Brest',
    '5' => 'Baku',
];

echo HTML::dropDownList('city_id', [], $array);
echo HTML::radioList('city_id', [], $array);
echo HTML::checkboxList('city_id', [], $array);

