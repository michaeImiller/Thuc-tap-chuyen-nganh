<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\employees */

$this->title = 'Đăng ký nhân viên mới';
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>



</div>
