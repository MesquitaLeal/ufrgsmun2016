<div class="modal fade" id="<?= $model->abbr . $value->type?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
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
                    <h3 class="topic-title"><?= Yii::t('app', $value->name)?></h3>
                    <p class="topic-text"><<?= Yii::t('app', $value->description)?></p>
                    <p class="topic-references">References:<br/><?= Yii::t('app', $value->references)?></p>
                </div>
            </div>
        </div>
    </div>
</div>
