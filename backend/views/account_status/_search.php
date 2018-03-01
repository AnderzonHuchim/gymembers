<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AccountStatusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'payment_date') ?>

    <?= $form->field($model, 'start_date') ?>

    <?= $form->field($model, 'ending_date') ?>

    <?= $form->field($model, 'saldo') ?>

    <?php // echo $form->field($model, 'abono') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
