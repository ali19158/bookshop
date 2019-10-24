<?php

namespace frontend\models;
use Yii;

class BookSearch {

    public function simpleSearch($keyword) {
        $sql = "SELECT * FROM book WHERE name LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getBookById($keyword) {
        $sql = "SELECT * FROM book WHERE id LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getBooksByAuthor($keyword) {
        $sql = "SELECT * FROM book WHERE author LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
    public function getBooksByYear($keyword) {
        $sql = "SELECT * FROM book WHERE year_published LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getBooksByManufacturer($keyword) {
        $sql = "SELECT * FROM book WHERE manufacturer LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}