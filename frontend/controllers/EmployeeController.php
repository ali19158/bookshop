<?php 

namespace frontend\controllers;

use Yii;

use yii\web\Controller;
use frontend\models\Employee;
use frontend\models\example\Animal;
use frontend\models\example\Human;


class EmployeeController extends Controller {
    public function actionIndex() {
        $employee1 = new Employee();
        $employee1->firstName = 'Alex';
        $employee1->lastName = 'John';
        $employee1->middleName = 'Smith';
        $employee1->salary = 10000;

        echo $employee1['salary'];

        echo "<hr>";

        foreach($employee1 as $attribute => $value){
            echo "$attribute: $value <br>";
        }

        echo "<hr>";

        $array = $employee1->toArray();
        echo '<pre>';
        print_r($array);
        echo '<pre>1';

        echo "<hr>";

        $array = $employee1->toArray();
        echo '<pre>';
        print_r($employee1->getAttributes());
        print_r($employee1->attributes);
        echo '<pre>';

        echo "<hr>";

        $array = $employee1->toArray();
        echo '<pre>';
        print_r($employee1->attributes());
        echo '<pre>';


    }

    public function actionTest() {
        $human1 = new Human();
        $animal1 = new Animal();

        $human1->walk();
        echo "<br>";
        $animal1->walk();
    }

    public function actionRegister() {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        if($model->load(Yii::$app->request->post())){
           
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }
        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionUpdate() {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();
        if(Yii::$app->request->isPost){
            $model->attributes = $formData;
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Updated!');
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
        
    }
}