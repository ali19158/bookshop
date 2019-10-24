<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails = ArrayHelper::getColumn($employees, 'email');

echo implode(' ,', $emails);

echo '<hr>';

$array = [
    '1' => 'Beirut',
    '2' => 'Berlin',
    '3' => 'Budapest',
    '4' => 'Brest',
    '5' => 'Baku',
];

$listData = ArrayHelper::map($employees, 'first_name', 'email');
echo '<pre>';
print_r($listData);
echo '<pre>';
echo HTML::dropDownList('emails', [], $listData);