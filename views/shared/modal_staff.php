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
                    <h2 class="topic-committee"><?= Yii::t('app', $model->abbr)?></h2>
                    <h3 class="topic-title">MEET THE STAFF</h3>
                    <?php foreach ($model->pessoa as $value) :?>
                        <?php if (!$value->image == NULL) :?>
                            <img class="person-picture" src='assets_b/images/staff/<?= $model->abbr;?>/<?= $value->image ; ?>.png' alt="Personal picture" />
                        <?php endif?>
                        <div class="person-nameBox">
                            <h2 class="person-name">
                                <?= Yii::t('app', $value->name)?>
                                <span><?= ($value->is_director == 1) ? Yii::t('app', 'Director') : Yii::t('app', 'Assistant-Director')?></span>
                            </h2>
                        </div>
                        <p class="person-description"><?= Yii::t('app', $value->description)?></p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
