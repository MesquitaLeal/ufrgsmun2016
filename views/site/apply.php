<?php
use yii\helpers\Url;
?>

<div class="container">
    <header>
        <h1 class="header-title apply-title"><?= Yii::t('app', 'apply')?></h1>
        <p class="header-subtitle"><?= Yii::t('app', 'We will post here information about the<br/>registration process as soon as possible.<br/><br/>In the meantime, take a look at our<br/>')?><a href=<?= Url::to(['committee/index']);?>><?= Yii::t('app', 'awesome committees')?></a>.</p>
        <!--<span class="arrow"></span>-->
    </header>
</div>
