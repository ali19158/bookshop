<?php

namespace frontend\models;

use yii\db\ActiveRecord;
use Yii;

class Book extends ActiveRecord {
    public static function tableName() {
        return '{{book}}';
    }

    public function getYearPublished() {
        return ($this->year_published) ? Yii::$app->formatter->asText($this->year_published) : "Not set";
    }

    public function getManufacturer() {
        return ($this->manufacturer) ? Yii::$app->formatter->asText($this->manufacturer) : "Not set";
    }

}