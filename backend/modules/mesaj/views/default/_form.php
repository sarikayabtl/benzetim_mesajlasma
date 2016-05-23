<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\mesaj\models\Mesaj */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mesaj-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'icerik')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'konusma_id')->textInput() ?>

    <?= $form->field($model, 'gonderen_id')->textInput() ?>

    <?= $form->field($model, 'tarih')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
