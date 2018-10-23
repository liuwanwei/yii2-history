<?php

namespace buddysoft\history\models;

use Yii;

/**
 * This is the model class for table "bs_login".
 *
 * @property integer $id
 * @property string $username
 * @property string $clientIp
 * @property string $createdAt

 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bs_login_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'clientIp'], 'required'],
            [['createdAt'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'clientIp' => 'IP',
            'createdAt' => '登录时间',
        ];
    }
}
