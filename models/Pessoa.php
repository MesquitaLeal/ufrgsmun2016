<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoa".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property integer $committee_id
 * @property integer $is_director
 * @property integer $staff_id
 *
 * @property Committee $committee
 * @property Staff $staff
 */
class Pessoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pessoa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'is_director'], 'required'],
            [['description'], 'string'],
            [['committee_id', 'is_director', 'staff_id'], 'integer'],
            [['name', 'image'], 'string', 'max' => 100],
            [['committee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Committee::className(), 'targetAttribute' => ['committee_id' => 'id']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'id']],
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
            'image' => Yii::t('app', 'Image'),
            'committee_id' => Yii::t('app', 'Committee ID'),
            'is_director' => Yii::t('app', 'Is Director'),
            'staff_id' => Yii::t('app', 'Staff ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommittee()
    {
        return $this->hasOne(Committee::className(), ['id' => 'committee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }
}
