<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AccountStatus */

$this->title = 'Update Account Status: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Account Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
