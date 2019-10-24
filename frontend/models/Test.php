<?php

namespace frontend\models;

use Yii;

class Test {
    public static function  getNewsList($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM book LIMIT '.$max;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        $helper = Yii::$app->stringHelper;
        
        if(!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['name'] = $helper->getShort($item['name']);
            }
        }
        return $result;
    }

    public static function getItem($id) {
        $id = intval($id);
        $sql = 'SELECT * FROM news WHERE id = '.$id;
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}