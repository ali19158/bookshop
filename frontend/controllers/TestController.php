<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;
use frontend\models\News;
use Faker\Factory;

class TestController extends Controller {

    public function actionGenerate() {

        $faker = Factory::create();

        for($j=0; $j<100; $j++){
            $news = [];
            for($i=0; $i<100; $i++){
                $news[] = [$faker->text(rand(30, 45)), $faker->text(rand(2000, 3000)), rand(0,1)];
            }
            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
        }

        die('stop');
    
    }

    // public function actionIndex() {
    //    /* $max = Yii::$app->params['maxNewsInList'];
    //     $list = Test::getNewsList($max);

    //     return $this->render('index', [
    //         'list' => $list,
    //     ]);*/
    //         $user = new User();
            
    //         echo "test<br>";
    //         die;

    // }

    // public function actionView($id) {
    //     $item = Test::getItem($id);
    //     return $this->render('view', [
    //         'item' => $item,
    //     ]);
    // }

    // public function actionMail() {
    //     $result = Yii::$app->mailer->compose()
    //             ->setFrom('ali19158@gmail.com')
    //             ->setTo('ali19158@gmail.com')
    //             ->setSubject('Тема сообщения')
    //             ->setTextBody('Текст сообщения')
    //             ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
    //             ->send();

    //             var_dump($result);
    //             $die;
    // }
}