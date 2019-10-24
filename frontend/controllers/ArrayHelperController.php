<?php

namespace frontend\controllers;

use frontend\models\Employee;
use yii\web\Controller;
class ArrayHelperController extends Controller {
    public function actionDemo() {

        $employees = Employee::find();
        return $this->render('demo',  [
        'employees' => $employees,
        ]
    );
    }
}