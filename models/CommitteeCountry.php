<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "committee_country".
 *
 * @property integer $committee_id
 * @property integer $country_id
 *
 * @property Committee $committee
 * @property Country $country
 */
class CommitteeCountry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'committee_country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['committee_id', 'country_id'], 'required'],
            [['committee_id', 'country_id'], 'integer'],
            [['committee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Committee::className(), 'targetAttribute' => ['committee_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'committee_id' => Yii::t('app', 'Committee ID'),
            'country_id' => Yii::t('app', 'Country ID'),
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
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }
}
