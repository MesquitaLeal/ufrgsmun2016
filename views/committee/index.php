<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\base\View;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Committees');

$pathDefault = [
    'asean' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'color1'=> '#d09014',
        'color2'=> '#d99715'
    ],
    'wb' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'color1'=> '#000000',
        'color2'=> '#444444'
    ],
    'disec' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'color1'=> '#000000',
        'color2'=> '#444444'
    ],
    'icj' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'color1'=> '#000000',
        'color2'=> '#444444'
    ],
    'ip' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'color1'=> '#000000',
        'color2'=> '#444444'
    ],
    'oea' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'color1'=> '#000000',
        'color2'=> '#444444'
    ],
    'au' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'color1'=> '#000000',
        'color2'=> '#444444'
    ],
    'unea' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'color1'=> '#000000',
        'color2'=> '#444444'
    ],
    'unsc' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'color1'=> '#000000',
        'color2'=> '#444444'
    ],
];
?>

<div class="container">
    <header>
        <h1 class="header-title"><?= Yii::t('app', 'committees')?></h1>
        <p class="header-subtitle"><?= Yii::t('app', 'Below you can see the information about<br/> the committees of UFRGSMUN 2016.')?> </p>
        <span class="arrow"></span>
    </header>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-brown" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-asean-high" />
    <linearGradient id="gradient-asean-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#d09014" />
          <stop offset="100%" stop-color="#d99715" />
    </linearGradient>
</svg>

<?php foreach ($dataProvider->models as $model):?>
    <?= $this->render('//shared/svg', ['path'=>$pathDefault[$model->abbr], 'model'=>$model]);?>
    <section class=<?= Html::encode($model->abbr)?>>
        <article class="container">
            <h2 class="article-title"><?= Yii::t('app', $model->name)?></h2>
            <p class="article-description article-committee"><?= Yii::t('app', $model->description)?></p>
            <?php foreach ($model->topic as $value) :?>
                <button class="button" type="button" data-toggle="modal" data-target=<?= '#' . $model->abbr . $value->type ?>> <?= Yii::t('app', 'Topic') . ' ' . Html::encode($value->type) ?></button>
                <?= $this->render('//shared/modal', ['model'=>$model, 'value'=>$value]);?>
            <?php endforeach;?>
            <button class="button" type="button" data-toggle="modal" data-target=<?= '#staff' . $model->abbr  ?>><?= Yii::t('app', 'Staff')?></button>
            <?= $this->render('//shared/modal_staff', ['model'=>$model]);?>
        </article>
    </section>
<?php endforeach;?>
