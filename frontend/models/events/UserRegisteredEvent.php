<?php

namespace frontend\models\events;

use common\components\UserNotificationInterface;
use yii\base\Event;
use frontend\models\User;


class UserRegisteredEvent extends Event implements UserNotificationInterface {

    public $user;

    public $subject;

    public function getSubject() {

        return $this->subject;
    }

    public function getEmail() {
        return $this->user->email;
    }

}