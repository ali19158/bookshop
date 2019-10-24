<?php

namespace frontend\controllers;
use frontend\models\forms\SearchForm;
use frontend\models\Book;
use Yii;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $model = new SearchForm();

        $results = null;
        if($model->load(Yii::$app->request->post()) ){
         $results = $model->search();
        }
        $bookList = Book::find()->orderBy('year_published')->limit(5)->all();

        return $this->render('index', [
            'bookList' => $bookList,
            'model' => $model,
            'results' => $results,
        ]);
    }

}
