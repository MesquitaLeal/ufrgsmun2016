<?php
use yii\helpers\Url;
?>

<div class="modal fade" id="staff<?= $model->abbr?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-wrap">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-delimiter">
                    <?php foreach ($model->pessoa as $value) :?>
                        <?php if (!$value->image == NULL) :?>
                            <img class="personal-picture img-responsible" src=<?=Url::to(['@web/images/staff/'.$value->image])?> alt="Personal picture" />
                        <?php endif?>
                        <h2 class="topic-committee"><?= Yii::t('app', $value->name)?></h2>
                        <p class="topic-description"><?= Yii::t('app', $value->description)?></p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
