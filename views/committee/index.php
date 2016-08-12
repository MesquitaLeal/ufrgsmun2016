<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\base\View;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$pathDefault = [
    'asean' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'upper-colorBegins'=> '#e9d6c5',
        'upper-colorEnds'=> '#e9d6c5',
        'lower-colorBegins'=> '#d09014',
        'lower-colorEnds'=> '#d99715'
    ],
    'wb' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'upper-colorBegins'=> '#eeb952',
        'upper-colorEnds'=> '#efbd5b',
        'lower-colorBegins'=> '#0c5d51',
        'lower-colorEnds'=> '#0d6659'
    ],
    'disec' => [
        'upper' => 'M0,0 L100,0 L100,100 L0,0',
        'lower' => 'M0,0 L100,100 L0,100 L0,0',
        'upper-colorBegins'=> '#17ae98',
        'upper-colorEnds'=> '#18b7a0',
        'lower-colorBegins'=> '#502f2e',
        'lower-colorEnds'=> '#573332'
    ],
    'icj' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'upper-colorBegins'=> '#8b514f',
        'upper-colorEnds'=> '#915553',
        'lower-colorBegins'=> '#770c19',
        'lower-colorEnds'=> '#800d1b'
    ],
    'ip' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'upper-colorBegins'=> '#ca152b',
        'upper-colorEnds'=> '#d3162d',
        'lower-colorBegins'=> '#a3440d',
        'lower-colorEnds'=> '#ad470e'
    ],
    'oea' => [
        'upper' => 'M0,0 L100,0 L100,100 L0,0',
        'lower' => 'M0,0 L100,100 L0,100 L0,0',
        'upper-colorBegins'=> '#ed6a1f',
        'upper-colorEnds'=> '#ee7028',
        'lower-colorBegins'=> '#622b5a',
        'lower-colorEnds'=> '#692e60'
    ],
    'au' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'upper-colorBegins'=> '#a24794',
        'upper-colorEnds'=> '#a94a9b',
        'lower-colorBegins'=> '#27692b',
        'lower-colorEnds'=> '#29712e'
    ],
    'unea' => [
        'upper' => 'M0,0 L100,0 L0,100 L0,0',
        'lower' => 'M100,0 L0,100 L100,100 L100,0',
        'upper-colorBegins'=> '#3fad46',
        'upper-colorEnds'=> '#42b449',
        'lower-colorBegins'=> '#6b7423',
        'lower-colorEnds'=> '#737c25'
    ],
    'unsc' => [
        'upper' => 'M0,0 L100,0 L100,100 L0,0',
        'lower' => 'M0,0 L100,100 L0,100 L0,0',
        'upper-colorBegins'=> '#adbb38',
        'upper-colorEnds'=> '#b4c33a',
        'lower-colorBegins'=> '#2b4d6c',
        'lower-colorEnds'=> '#2e5273'
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
