<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\mesaj\models\MesajSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mesajs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mesaj-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mesaj', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'icerik:ntext',
            'konusma_id',
            'gonderen_id',
            'tarih',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
