<?php

namespace frontend\controllers;

use frontend\models\Subscribe;
use Yii;
use yii\web\Controller;

class NewsletterController extends Controller 
{
    public function actionSubscribe() {

        $formData = Yii::$app->request->post();
        $model = new Subscribe();

        if(Yii::$app->request->isPost){

            $model->email = $formData['email'];
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Subscribe completed');
            }


        }
        
        return $this->render('subscribe', [
            'model' => $model,
        ]); 
    }

}   