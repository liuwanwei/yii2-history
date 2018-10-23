<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\login\models\loginSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '登录历史';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="login-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '{items}{pager}{summary}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'clientIp',
            'createdAt',
        ],
    ]); ?>
</div>
