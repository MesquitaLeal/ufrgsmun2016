<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topics".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $type
 * @property integer $committees_id
 *
 * @property Committees $committees
 */
class Topic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'type', 'committees_id'], 'required'],
            [['description'], 'string'],
            [['committee_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 1],
            [['committee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Committee::className(), 'targetAttribute' => ['committee_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'type' => Yii::t('app', 'Type'),
            'committee_id' => Yii::t('app', 'Committees ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommittee()
    {
        return $this->hasOne(Committee::className(), ['id' => 'committee_id']);
    }
}
