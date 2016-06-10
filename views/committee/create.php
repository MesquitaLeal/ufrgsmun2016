<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Committee */

$this->title = Yii::t('app', 'Create Committee');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Committees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="committee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
