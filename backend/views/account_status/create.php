<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AccountStatus */

$this->title = 'Create Account Status';
$this->params['breadcrumbs'][] = ['label' => 'Account Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
