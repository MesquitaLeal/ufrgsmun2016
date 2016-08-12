<?php

/* @var $this \yii\web\View */
/* @var $content string */
include_once("analyticstracking.php");
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets_b\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="icon" href="assets_b/favicon.png">

    <meta property="og:url"                content="https://www.ufrgs.br/ufrgsmun" />
    <meta property="og:title"              content="UFRGSMUN 2016" />
    <meta property="og:description"        content="Empowering people, overcoming challenges." />
    <meta property="og:image"              content="https://www.ufrgs.br/ufrgsmun/2016/assets_b/images/logo_horizontal_colorido.png" />

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
        <?= $content ?>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
