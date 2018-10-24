<?php

namespace buddysoft\history\handlers;

use buddysoft\history\models\Login;

use Yii;

class LoginHandler extends \yii\base\BaseObject{
 
  public static function afterLogin(){
    $model = new Login();
    $model->username = Yii::$app->user->identity->username;
    $model->clientIp = Yii::$app->request->userIP;
    $model->save();
  }
}